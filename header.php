<?php include "db.php" ?><html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">




</head>
<body>
<div class="container-fluid" style="background-color: #efefef; margin-bottom: 20px">
    <div class="container">
        <div class="row justify-content-center" style="font-size: 15px; line-height: 30px; color: grey">
            <div class="col" style=" height: 30px"><i class="fa-solid fa-phone" style="margin-right: 5px"></i>fırattonguc@gmail.com</div>
            <div class="col text-left" style="height: 30px"><i class="fa-solid fa-phone" style="margin-right: 5px"></i>+90 505 505 5050</div>
            <div class="col text-center" style="height: 30px"><i class="fa-solid fa-phone" style="margin-right: 5px"></i>+90 531 504 9241</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-start align-items-center">
        <div class="col-3"><a href="/"><img width="80%" src="image/logo.png"></a></div>
        <div class="col-4"><input type="text" placeholder="Bir Ürün Ara..." class="search_input"><button class="search_button" type="button" ><i style="color: white" class="fa-solid fa-magnifying-glass"></i></button></div>
        <div class="col-5 text-center ">
            <?php if (!isset($_SESSION['users_adi'])){ ?>
            <div class="hesabim">
                <i style="font-size: 30px; margin:7px 0 0 20px; color:  #D72323; float: left" class="fa-regular fa-user"></i>
                <div style="height: 20px; line-height: 20px"><a title="Giriş Yap" href="login" style="color: #656d78; margin-top: 10px" >Giriş yap</a></div>
                <div style="height: 20px; line-height: 20px"> <a title="Kayıt Ol"  href="register" style="color: #656d78;margin: 0" >Kayıt ol</a></div>
            </div>
                        <?php } else {?>
                <div class="hesabim"><?php

            echo $_SESSION['users_adi']." ".$_SESSION['users_soyadi'];
             ?><br>
            <a href="db.php?logout">Çıkış Yap</a>
            </div>
            <a href="add_product"><div class="urun_but" style="margin: 0 0 0 20px; width: 150px">Ürün Ekle</div></a>
            <?php } ?>


    </div>
    </div>
</div>

<div class="container-fluid shadow " style="background-color: #0089FF; margin: 20px 0 20px 0">
    <div class="container ">
        <div class="row justify-content-center align-items-center" style="font-size: 15px; line-height: 30px; height: 50px; color: white; font-weight: bold">

           <a class="header_bottom col text-center" style="height: 30px" href="/">Anasayfa</a>
           <a class="header_bottom col text-center" style="height: 30px" href="#">Yeni Ürünler</a>
           <a class="header_bottom col text-center" style="height: 30px" href="#">İndirimli Ürünler</a>
           <a class="header_bottom col text-center" style="height: 30px" href="#">Hakkımızda</a>
           <a class="header_bottom col text-center" style="height: 30px" href="#">Favoriler</a>

        </div>
    </div>
</div>

</body>
</html>
