<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "lilit");
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Թարմացնել</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <h1>Թարմացնել պրոդուկտ <?php echo $_GET['id']; ?></h1>

            <form action="action.php" method="post" enctype="multipart/form-data">
                <label for="title">Վերնագիր</label><br>
                <input type="text" name="title" id="title" value="<?php echo $r['title']; ?>"> <br><br>

                <label for="price">Գին</label><br>
				<input type="number" name="price" id="price" value="<?php echo $r['price']; ?>"> <br><br>

				<label for="category">Ենթաբաժին</label><br>
                <textarea name="category" id="category" rows="3" cols="40"><?php echo $r['category']; ?></textarea><br><br>

                <label for="image1">նկար1</label><br>
                <textarea name="image1" id="image1" rows="3" cols="40"> <?php echo $r['image1']; ?></textarea><br><br>

                <label for="image2">նկար2</label><br>
                <textarea name="image2" id="image2" rows="3" cols="40"> <?php echo $r['image2']; ?></textarea><br><br>
               
				<label for="image3">նկար3</label><br>
                <textarea name="image3" id="image3" rows="3" cols="40"> <?php echo $r['image3']; ?></textarea><br><br>
                
				<label for="image4">նկար4</label><br>
                <textarea name="image4" id="image4" rows="3" cols="40"> <?php echo $r['image4']; ?></textarea><br><br>


                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

                <input type="submit" name="update" value="Թարմացնել">
            </form>
        </div>
    </div>
</body>

</html>
