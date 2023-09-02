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

    <title>Առաքման հասցե</title>
</head>

<body>

    <?php include 'header.php';?>
    <?php include 'menu.php';?>

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="cart.php" class="text-success">Զամբյուղ</a></li>
                <li class="breadcrumb-item"><a href="payment.php" class="text-success">Վճարման մեթոդ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Առաքման հասցե</li>
            </ol>
        </nav>
        <div class="modal-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Անուն*" Required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Ազգանուն*" Required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Անուն (2)">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Կազմակերպություն">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="էլ. փոստ *" Required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Հեռախոսահամար *" Required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputCountry" placeholder="Երկիր *" Required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputCity" placeholder="Մարզ *" Required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputCity" placeholder="Քաղաք *" Required>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Հասցե *" Required>
                </div>
            </form>
            <button type="button" class="btn btn-success mb-1"><a href="confirm.php" id="checkout">Հաստատել</a></button>
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