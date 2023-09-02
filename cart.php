<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="icon.png" type="image/x-icon" />

    <title>Զամբյուղ</title>
</head>

<body>

    <?php include 'header.php';?>
    <?php include 'menu.php';?>

    <div class="container-fluid">
        <div class="row border-top">
            <p class="info categories mt-3 pl-5 col-2 col-sm-1"><strong>#</strong></p>
            <p class="info categories mt-3 pl-5 pr-0 col-7 col-sm-6 col-md-5 col-lg-6"><strong>Պրոդուկտ</strong></p>
            <p class="info categories mt-3 pl-0 pr-0 col-sm-2 col-lg-1 d-none d-sm-block"><strong>Գին</strong></p>
            <p class="info categories mt-3 pl-0 pr-5 col-sm-2 d-none d-sm-block"><strong>Քանակ</strong></p>
        </div>

        <div class="row fav border-top alert alert-light alert-dismissible fade show" role="alert">
            <p class="info col-2 col-sm-1">1</p>
            <a href="product.php" class="col-3 col-sm-2 col-md-1"><img src="img/apple.jpg" class="img-fluid"></a>
            <a href="product.php" class="info product_name text-success col-4 col-lg-5">Խնձոր</a>
            <p class="info col-sm-2 col-lg-1 d-none d-sm-block">700 ֏/կգ</p>
            <p class="info col-sm-2 d-none d-sm-block">3կգ</p>
            <a type="button" class="close col-2" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
        </div>

        <div class="row fav border-top alert alert-light alert-dismissible fade show" role="alert">
            <p class="info col-2 col-sm-1">2</p>
            <a href="product.php" class="col-3 col-sm-2 col-md-1"><img src="img/watermelon.jpg" class="img-fluid"></a>
            <a href="product.php" class="info product_name text-success col-4 col-lg-5">Ձմերուկ</a>
            <p class="info col-sm-2 col-lg-1 d-none d-sm-block">700 ֏/կգ</p>
            <p class="info col-sm-2 d-none d-sm-block">3կգ</p>
            <a type="button" class="close col-2" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
        </div>

        <div class="row fav border-top alert alert-light alert-dismissible fade show" role="alert">
            <p class="info col-2 col-sm-1">3</p>
            <a href="product.php" class="col-3 col-sm-2 col-md-1"><img src="img/pear.jpg" class="img-fluid"></a>
            <a href="product.php" class="info product_name text-success col-4 col-lg-5">Տանձ</a>
            <p class="info col-sm-2 col-lg-1 d-none d-sm-block">700 ֏/կգ</p>
            <p class="info col-sm-2 d-none d-sm-block">3կգ</p>
            <a type="button" class="close col-2" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
        </div>
        <div class="row fav border-top mb-0 alert alert-light">
            <p class="total text-success">Ընդհանուր: 6300֏</p>
            </a>
        </div>

        <button type="button" class="btn btn-success mb-1"><a href="shop.php" id="checkout">Շարունակել գնումները</a></button>
        <button type="button" class="btn btn-success mb-1"><a href="payment.php" id="checkout">Պատվիրել</a></button>
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
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>

</html>