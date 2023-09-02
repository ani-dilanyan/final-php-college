<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="icon.png" type="image/x-icon" />
    <title>Գլխավոր</title>
</head>

<body>
    <?php include 'header.php';?>
    <?php include 'menu.php';?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel_img d-block w-100 h-25" src="img/fruits.jpg" alt="First slide">
                <p class="w-25 position-absolute text-light d-none d-lg-block"
                    style="bottom: 100px; left: 400px; font-size: 25px"><strong>Հատուկ առաջարկ!</strong><br>Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-25" src="img/vegetables.jpg" alt="Second slide">
                <p class="w-25 position-absolute text-light d-none d-lg-block"
                    style="bottom: 100px; left: 400px;font-size: 25px"><strong>Հատուկ առաջարկ!</strong><br>Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <p class="w-25 position-absolute text-light d-none d-lg-block"
                    style="bottom: 100px; left: 400px; font-size: 25px"><strong>Հատուկ առաջարկ!</strong><br>Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="carousel-item">
                <img class="carousel_img d-block w-100 h-25" src="img/dairy.jpg" alt="Third slide">
                <p class="w-25 position-absolute text-light d-none d-lg-block"
                    style="bottom: 100px; left: 400px; font-size: 25px"><strong>Հատուկ առաջարկ!</strong><br>Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="carousel-item">
                <img class="carousel_img d-block w-100 h-25" src="img/meat.jpg" alt="Third slide">
                <p class="w-25 position-absolute text-light d-none d-lg-block"
                    style="bottom: 100px; left: 400px; font-size: 25px"><strong>Հատուկ առաջարկ!</strong><br>Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="carousel-item">
                <img class="carousel_img d-block w-100 h-25" src="img/bakery.jpg" alt="Third slide">
                <p class="w-25 position-absolute text-light d-none d-lg-block"
                    style="bottom: 100px; left: 400px; font-size: 25px"><strong>Հատուկ առաջարկ!</strong><br>Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Նախորդ</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Հաջորդ</span>
        </a>
    </div>
    <br>

    <h3 class="m-0 p-3 font-weight-bold alert-warning ">Հատուկ առաջարկներ</h3>
    <div class="row m-0">

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <img class="card-img-top pl-3" src="img/berries.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Հատապուղներ</h5>
                    <p class="card-text pl-4">3500 ֏/կգ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <img class="card-img-top pl-3" src="img/spinach.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Սպանախ</h5>
                    <p class="card-text pl-4">2200 ֏/կգ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <img class="card-img-top pl-3" src="img/yogurt.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Թթվասեր</h5>
                    <p class="card-text pl-4">900 ֏</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1 d-md-none d-lg-block">
                <img class="card-img-top pl-3" src="img/potato.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Կարտոֆիլ</h5>
                    <p class="card-text pl-4">200 ֏/կգ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

    </div>

    <h3 class="mt-3 m-0 p-3 font-weight-bold alert-warning">Լավագույն վաճառքվող</h3>
    <div class="row m-0">

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <img class="card-img-top pl-3" src="img/beef.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Տավարի միս</h5>
                    <p class="card-text pl-4">4200 ֏/կգ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1  d-md-none d-lg-block">
                <img class="card-img-top pl-3" src="img/lavash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Լավաշ</h5>
                    <p class="card-text pl-4">200 ֏/հտ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <img class="card-img-top pl-3" src="img/watermelon.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Ձմերուկ</h5>
                    <p class="card-text pl-4">200 ֏/կգ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>

        <a href="product.php" class="text-dark" style="text-decoration:none">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 p-1">
                <img class="card-img-top pl-3" src="img/bread.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pl-4">Հաց</h5>
                    <p class="card-text pl-4">300 ֏/հտ</p>
                    <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                </div>
            </div>
        </a>
    </div>
    <h3 class="mt-3 m-0 p-3 font-weight-bold alert-warning ">Օրվա բաղադրատոմս</h3>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.youtube.com/embed/AEUBQ7Ieub0" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            style="height: 700px"></iframe>
    </div>

    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>