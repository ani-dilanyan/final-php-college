<!DOCTYPE html>
<html>

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

    <title>Պրոդուկտ</title>
</head>

<body>
    <?php
	include("header.php");
	include("menu.php");	
	?>


    <!-- Product -->
    <div class="container-fluid">

        <?php
$conn = mysqli_connect("localhost", "root", "", "lilit");
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM `products` WHERE `id`=".$_GET['id'];
$res = mysqli_query($conn, $sql);

while ($arr = mysqli_fetch_assoc($res)) { ?>

        <!-- Product photos -->
        <h3 class="text-dark"><?php echo $arr["title"]; ?></h3>
        <hr>
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col-2 d-flex flex-column align-items-center">
                        <a data-fancybox="gallery" href="<?php echo $arr["image1"]; ?>"><img
                                src="<?php echo $arr["image1"]; ?>" class="img-fluid mb-2"></a>
                        <a data-fancybox="gallery" href="<?php echo $arr["image2"]; ?>"><img
                                src="<?php echo $arr["image2"]; ?>" class="img-fluid mb-2"></a>
                        <a data-fancybox="gallery" href="<?php echo $arr["image3"]; ?>"><img
                                src="<?php echo $arr["image3"]; ?>" class="img-fluid mb-2"></a>
                        <a data-fancybox="gallery" href="<?php echo $arr["image4"]; ?>"><img
                                src="<?php echo $arr["image4"]; ?>" class="img-fluid mb-2"></a>
                    </div>
                    <div class="col-10">
                        <img src="<?php echo $arr["image1"]; ?>" class="img-fluid">
                    </div>
                </div>
            </div>


            <!-- Product description -->
            <div class="col-12 col-lg-5">
                <p id="price"><?php echo $arr["price"]; ?> ֏/կգ</p>
                <div class="input-group mb-3" id="quantity">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Քանակ</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                        placeholder="1կգ">
                </div>

                <div>
                    <button type="button" class="btn btn-success">Գնել հիմա</button>
                    <button type="button" class="btn btn-success"><a class="add_to_cart" href="cart.php">Ավելացնել զամբյուղ</a></button>
                </div>

                <div class="mt-5">
                    <h4>Կարճ նկարագրություն</h4>
                    <hr>
                    <ul>
                        <li>Առանց գլյուտեն</li>
                        <li>Առանց լակտոզա</li>
                        <li>Առանց կոնսերվատների</li>
                    </ul>
                    <h4 class="mt-5">Պահպանման պայմաններ</h4>
                    <hr>
                    <ul>
                        <li>Պահպանեք դրանք զով, չոր տեղում, հեռու արևի ուղիղ ճառագայթներից: Փաթաթեք դրանք թերթով
                             առանձին-առանձին դրանք երկար ժամանակ թարմ պահելու համար։</li>
                        <li>Եթե որևէ պրոդուկտ փչանում է, այն պաշտպանում է մյուս պրոդուկտները փչանալուց: Վերցրեք մի բաժակ ջուր,
                             դրա մեջ լուծել 1/8-րդ թեյի գդալ աղ։ </li>
                        <li>Թրջել թարմ կտրված շերտերը և քամել դրանք: Այժմ ողողեք դրանք քաղցրահամ ջրի մեջ, որպեսզի չլինի
                             աղի համտեսել:</li>
                    </ul>
                </div>
            </div>




            <?php 
}

	mysqli_close($conn);

	?>





        </div>
    </div>



    <!-- About product -->
    <div id="accordion2">
        <div class="card border-0">
            <div class="card-header bg-white" id="headingOne">
                <button class="btn btn-link text-success" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Ամփոփում
                </button>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                <div class="card-body">
                    <strong class="text-dark">Պրոդուկտի մասին</strong>
                    <hr>
                    Վառ կարմիր գույնը և սրտաձև <br> Կարմիր Համեղ խնձորները խրթխրթան են,<br> հյութալի և
                     թեթևակի քաղցր, բնական աղբյուր են <br> առանց մանրաթելերի և ճարպերի:
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header bg-white" id="headingTwo">
                <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Գնահատական
                </button>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                <div class="card-body">

                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- May also like products -->
    <h3 class="m-0 p-3 font-weight-bold alert-warning" id="rec">Նման պրոդուկտներ</h3>
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
    <?php
	include("footer.php");	
	?>

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