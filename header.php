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

    <title>Գլխավոր</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-dark">
            <div class="col-md-4 col-xl-6 d-none d-md-block pt-2 text-warning">
                Հեռախոսահամար: +xxx yyy zzz
            </div>
            <div class=" col-6 col-md-2">
                <select class="custom-select my-1" id="inlineFormCustomSelectPref">
                    <option selected>Հայ</option>
                    <option value="1">Рус</option>
                    <option value="2">Eng</option>
                </select>
            </div>
            <div class="col-6 col-md-2">
                <select class="custom-select my-1 " id="inlineFormCustomSelectPref">
                    <option selected>֏</option>
                    <option value="1">₽</option>
                    <option value="2">$</option>
                </select>
            </div>
            <div class=" col-md-4 col-lg-2 d-none d-md-block pt-1">
                <a href="cart.php" type="button" class="btn btn-warning font-weight-bold ">Զամբյուղ <span
                        class="badge badge-dark text-light">3</span>
                </a>
            </div>
        </div>

        <div class="row">
            <nav class="navbar navbar-dark bg-light col-12">
                <div class="col-6 col-md-2">
                    <a href="index.php"><img src="img/logo.png" width="95" height="80"></a>
                </div>
                <div class=" col-md-6 col-lg-6  d-none d-md-block pr-2 ">
                    <form class="form-inline  d-none d-md-block float-right">
                        <input class="form-control mr-sm-2" type="search" placeholder="Որոնել" aria-label="Search">
                        <button class="btn btn-outline-dark bg-secondary my-2 my-sm-0" type="submit">Որոնել</button>
                    </form>
                </div>
                <div class="pr-2 col-2 d-block ">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Հաշիվ
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button" data-toggle="modal"
                                data-target="#loginModal">Մուտք գործել</button>
                            <button class="dropdown-item" type="button" data-toggle="modal"
                                data-target="#registerModal">Գրանցվել</button>
                            <button class="dropdown-item" type="button"><a href="activity.php" class="text-dark"
                                    id="activity">Ակտիվություն</a></button>
                            <button class="dropdown-item" type="button"><a href="settings.php" class="text-dark"
                                    id="settings">Կարգավորումներ</a></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Մուտք գործել</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">էլ. հասցե</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ծածկագիր</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Ծածկագիր">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Հիշել</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Մուտք գործել</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Գրանցվել</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Անուն</label>
                                <input name="fullName" type="text" class="form-control" id="inputName"
                                    placeholder="Անուն">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">էլ. հասցե</label>
                                <input name="email" type="email" class="form-control" id="inputEmail4"
                                    placeholder="էլ. հասցե">
                            </div>
                        </div>
                        <div class="form-group col-md-12 p-0">
                            <label for="inputPassword4">Ծածկագիր</label>
                            <input name="password" type="password" class="form-control" id="inputPassword4"
                                placeholder="Ծածկագիր">
                        </div>
                        <div class="form-group col-md-12 p-0">
                            <label for="inputPassword5">Հաստատել ծածկագիրը</label>
                            <input name="conf_password" type="password" class="form-control" id="inputPassword5"
                                placeholder="Հաստատել ծածկագիրը">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="submit" value="Գրանցվել" class="btn btn-success">
                        </div>
                    </form>
                    <?php          
          $fullName = $email = $password = $conf_password = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullName = $_POST["fullName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $conf_password = $_POST["conf_password"];

            // $link = mysqli_connect('localhost', 'root', '', 'test');
            // $sql = "INSERT INTO `users`VALUES (null, '$fullName','$email','$password', '$conf_password)";
            // $result = mysqli_query($link, $sql);
            // mysqli_close($link);
          }

        //   $conn = new mysqli("localhost", "root", "", "test");
        //   if ($conn->connect_error) {
        //     die("Error connecting to database");
        //   } else {
        //     echo "Connected successfully" . '<br>';
        //   }

        //   $sql = "INSERT INTO `users` VALUES(null, '$fullName', '$email', '$password', '$conf_password')";
        //   if($conn->query($sql)) {
        //     echo "Successfully inserted";
        //   }else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        //   }
          ?>

                </div>
            </div>
        </div>
    </div>


</body>

</html>