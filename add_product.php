<?php include "header.php"?>
<html>
<head>
    <title>Fırat Tonguç > Ürün Ekle</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style="margin-top: 10px; border: 1px solid #ccc; border-radius: 10px" class="container">
<h5 style="margin-top:10px ">Ürün Ekle</h5>
<form action="db.php" method="post" enctype="multipart/form-data">
    <table>
        <tr style="width: 600px; float: left;margin-bottom: 20px" >
        <td width="200px">Ürün Adı :</td>
        <td width="300px"><input name="adi" type="text" required></td>
        </tr>

        <tr style="width: 600px; float: left;margin-bottom: 20px" >
        <td width="200px">Ürün Kategori :</td>
        <td width="300px"><input name="kategori" type="text" required></td>
        </tr>

        <tr style="width: 600px; float: left;margin-bottom: 20px" >
        <td width="200px">Ürün Fiyat :</td>
        <td width="300px"><input name="fiyat" type="text" required></td>
        </tr>

        <tr style="width: 600px; float: left;margin-bottom: 20px" >
        <td width="200px">Ürün Resim :</td>
        <td width="300px"><input type="file" name="file" required></td>
        </tr>

        <tr><td><button type="submit" name="add_urun" class="urun_but">Ürün Ekle</button></td></tr>
    </table>
</form>

</div>
</body>
</html>