<?php include "header.php"?>
<?php
$urun_url_oku = $_GET['urun_id'];

$sql="select * from urun where urun_id = $urun_url_oku";
$sorgu=mysqli_query($baglanti,$sql);
$sonuc=mysqli_fetch_assoc($sorgu);
?>
<html>
<head>
    <title>Fırat Tonguç > <?php echo $sonuc['urun_adi']?></title>
    <link rel="stylesheet" type="text/css" href="css/zoom-style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
    <img id="large" width="480" height="480" src="image/product/<?php echo $sonuc['urun_resim']?>" data-zoom-image="image/product/<?php echo $sonuc['urun_resim']?>"/>

        </div>
<div class="col">
    <div style="text-align: center">

        <table style="margin-top: 100px">
            <tr>
                <td style="font-weight: bold" width="200px">Ürün Adı</td>
                <td width="200px">: <?php echo $sonuc['urun_adi']?></td>
            </tr>

            <tr>
                <td style="font-weight: bold" width="200px">Ürün Kategori</td>
                <td width="200px">: <?php echo $sonuc['urun_kategori']?></td>
            </tr>

            <tr>
                <td style="font-weight: bold" width="200px">Ürün Fiyat</td>
                <td style="color: red;" width="200px">: <?php echo $sonuc['urun_fiyat']?> TL</td>
            </tr>
        </table>
        <button class="urun_but">Sepete Ekle</button>
        <button style="background-color:#D72323;" class="urun_but">Hemen Al</button>
    </div>
</div>
</div>
</div>
</body>
</html>
<?php include "footer.php"?>