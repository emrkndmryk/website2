<?php include "header.php" ?>
<?php
$urunseek=mysqli_query($baglanti,"SELECT * FROM urun");
?>
<html>
<head>
    <title>Fırat Tonguç > Anasayfa</title>
</head>
<body>
<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" style="border-radius: 10px">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/slider/slider_1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/slider/slider_3.png" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row" style="margin-top: 30px">

        <?php while( $urun_sonuc=mysqli_fetch_assoc($urunseek) ){ ?>
         <div class="urun_div">
            <a href="product?urun_id=<?php echo $urun_sonuc["urun_id"]; ?>">
            <img style=" width: 95%; max-width: 227.4px; max-height: 227.4px;  margin: 2.5%" src="image/product/<?php echo $urun_sonuc["urun_resim"]; ?>">
            <div style="max-height: 8%; height:10%; line-height: 160%; width: 100%;padding-left: 10px; color: #0089FF; font-size: 14px font-weight: bold"><?php echo $urun_sonuc["urun_adi"]; ?></div>
            <div style="max-height: 8%; height:10%; line-height: 160%; width: 100%;padding-left: 10px; color: #656d78; font-size: 14px"><?php echo $urun_sonuc["urun_kategori"]; ?></div>
            <div style="max-height: 14%; height:14%;  line-height: 280%; width: 100%; text-align: center; color: #656d78; font-weight: bold; font-size: 18px"><?php echo $urun_sonuc["urun_fiyat"]; ?> TL</div>
         </div>
        </a>
        <?php } ?>

    </div>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
<?php include "footer.php" ?>
