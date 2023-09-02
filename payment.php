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

    <title>Վճարման եղանակ</title>
</head>

<body>

    <?php include 'header.php';?>
    <?php include 'menu.php';?>

    <div class="container-fluid p-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="cart.php" class="text-success">զամբյուղ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Վճարման եղանակ</li>
            </ol>
        </nav>

        <div>
            <h5 class="creadit_card ml-3 text-secondary">Քարտային տվյալներ</h5>
            <img class="ml-3" src="img/card.png">
        </div>

        <div class="modal-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control py-2" id="inputEmail4" placeholder="Card holder name *">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control py-2" id="inputPassword4" placeholder="Card number *">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control" placeholder="Confirm Password">
                            <option selected>Հունվար</option>
                            <option>Փետրվար</option>
                            <option>Մարտ</option>
                            <option>Ապրիլ</option>
                            <option>Մայիս</option>
                            <option>Հունիս</option>
                            <option>Հուլիս</option>
                            <option>Օգոստոս</option>
                            <option>Սեպտեմբեր</option>
                            <option>Հոկտեմբեր</option>
                            <option>Նոյեմբեր</option>
                            <option>Դեկտեմբեր</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                            <option selected>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                            <option>2026</option>
                            <option>2027</option>
                            <option>2028</option>
                            <option>2029</option>
                            <option>2030</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputCity" placeholder="CVV*">
                    </div>
                </div>
                <hr>
            </form>
            <button type="button" class="btn btn-success mb-1"><a href="address.php" id="checkout">Հաջորդ</a></button>

        </div>
        </div>
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