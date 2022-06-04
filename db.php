<?php

$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"Dermines6";
$veritabani        =	"davetiye";

$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
    echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
?>
<?php
ob_start();
session_start();
if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "select * from users where users_mail = '$username' and users_pass ='$password'";
    $result = mysqli_query($baglanti, $sql);
    $count=mysqli_num_rows($result);
    $sonuc=mysqli_fetch_assoc($result);

    echo $count;

        if ($count==1 ){
            $_SESSION['users_adi']=$sonuc["users_adi"];
            $_SESSION['users_soyadi']=$sonuc["users_soyadi"];
            $_SESSION['users_mail']=$sonuc["users_mail"];
            $_SESSION['users_id']=$sonuc["users_id"];
            header('Location: '."../");
            }

        else{
            $_SESSION['logerr']="Giriş Bilgileri Yanlış";
            header('Location: '."../login");
        }
}
if (isset($_POST['register'])){

    $adi = $_POST['name'];
    $soyadi = $_POST['surname'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];


    $sql = "INSERT INTO users (users_adi, users_soyadi, users_mail,users_pass)
VALUES ('$adi', '$soyadi', '$mail','$password')";

    if ($baglanti->query($sql) === TRUE) {
        $_SESSION['logerr']="Kayıt Başarılı Giriş Yapınız!";
        header('Location: '."../login");
    } else {
        echo "Error: " . $sql . "<br>" . $baglanti->error;
    }

    $baglanti->close();
}
if (isset($_GET['logout'])){

    session_unset();
    session_destroy();
    header('Location: '."/");
}
if (isset($_POST['add_urun'])) {

    $urun_rand_id=rand();

    $adi = $_POST['adi'];
    $kategori = $_POST['kategori'];
    $fiyat = $_POST['fiyat'];

    $filename = $_FILES['file']['name'];
    $urun_resim = $urun_rand_id . "_" . $filename;

    move_uploaded_file($_FILES['file']['tmp_name'], 'image/product/' . $urun_resim);

    $sql = "INSERT INTO urun (urun_adi, urun_kategori, urun_fiyat,urun_resim)
VALUES ('$adi', '$kategori', '$fiyat','$urun_resim')";

    if ($baglanti->query($sql) === TRUE) {
        header('Location: '."/");
    } else {
        echo "Error: " . $sql . "<br>" . $baglanti->error;
    }

    $baglanti->close();

}
?>
