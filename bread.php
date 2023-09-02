<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="icon.png" type="image/x-icon" />

    <title>Հացաբուլկեղեն</title>
</head>

<body>
    <?php
    include("header.php");
    include("menu.php");
    ?>


    <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0 ">
            <nav aria-label="breadcrumb" class="col-md-6 col-lg-8 p-0 d-none d-md-block">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item"><a href="index.php" class="text-success">Գլխավոր</a></li>
                    <li class="breadcrumb-item"><a href="shop.php" class="text-success">Հացաբուլկեղեն</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Հաց</li>
                </ol>
            </nav>
            <h6 class="col-lg-2 d-none d-xl-block py-3 px-1 text-secondary">Դասավորել ըստ:</h6>
            <form class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-2 px-3 p-sm-0 mt-1">
                <select class="custom-select" id="sort">
                    <option selected>Առաջարկվող</option>
                    <option value="1">Ժամանակի</option>
                    <option value="2">Աճման</option>
                    <option value="3">Նվազման</option>
                </select>
            </form>
        </div>
    </div>
    <h3 class="text-dark d-none d-md-block m-0 p-0 ml-md-4 border-bottom">Ֆիլտրեր</h3>
    <div class="container-fluid" id="shop">
        <div id="accordion">

            <div class="card border-0 d-none d-md-block">
                <div class="card-header bg-white" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Սննդային հավելումներ
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" id="Checkbox1" value="option1">
                            <label class="form-check-label" for="Checkbox1">Առանց լակտոզա (1)</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" id="Checkbox2" value="option2">
                            <label class="form-check-label" for="Checkbox2">Առանց գլյուտեն (1)</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" id="Checkbox3" value="option3">
                            <label class="form-check-label" for="Checkbox3">Առանց լյուպին (2)</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 d-none d-md-block">
                <div class="card-header bg-white" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Հավելումների բացառում
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" id="Checkbox1" value="option1">
                            <label class="form-check-label" for="Checkbox1">Առանց լակտոզա (1)</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" id="Checkbox2" value="option2">
                            <label class="form-check-label" for="Checkbox2">Առանց գլյուտեն (1)</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" id="Checkbox3" value="option3">
                            <label class="form-check-label" for="Checkbox3">Առանց լյուպին (2)</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 d-none d-md-block">
                <div class="card-header bg-white" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-success" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Գին
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body mr-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Սկսած</span>
                                <span class="input-group-text">֏</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Մինչև</span>
                                <span class="input-group-text">֏</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- products -->
        <div class="container-fluid p-0 m-0">
            <div class="row">

                <?php


                $link = mysqli_connect("localhost", "root", "", "lilit");

                mysqli_set_charset($link, "utf8");

                $sql1 = "SELECT * FROM `products` WHERE category = 'bread'";

                $res = mysqli_query($link, $sql1);

                while ($arr = mysqli_fetch_assoc($res)) { ?>


                    <a href="product1.php?id=<?php echo $arr["id"]; ?>" class="text-dark" style="text-decoration:none">
                        <div class="card col-12 col-md-6 col-lg-4 p-1">
                            <img class="card-img-top pl-3" src="<?php echo $arr["image1"]; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title pl-4"><?php echo $arr["title"]; ?></h5>
                                <ul>
                                    <li>Առանց գլյուտեն</li>
                                    <li>Առանց կոնսերվատների</li>
                                    <li>Առանց լակտոզա</li>
                                </ul>
                                <p class="card-text pl-4"><?php echo $arr["price"]; ?> ֏/կգ</p>
                                <a href="cart.php" class="btn btn-success ml-4 mt-2">Ավելացնել զամբյուղ</a>
                            </div>
                        </div>
                    </a>




                <?php
                }

                mysqli_close($link);

                ?>






            </div>
        </div>
    </div>




    <!-- Page navigation -->
    <br>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link text-dark" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link text-dark" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>


    <?php include 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>