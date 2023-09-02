<?php  
if( isset($_POST['add']) ){
	$title = $_POST['title'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$image1 = $_POST['image1'];
	$image2 = $_POST['image2'];
	$image3 = $_POST['image3'];
	$image4 = $_POST['image4'];

	$link = mysqli_connect('localhost', 'root', '', 'lilit');

	$sql = "INSERT INTO `products` VALUES (null,'$title', '$price', '$category','$image1','$image2','$image3','$image4')";

	$result = mysqli_query($link, $sql);

	if($result){
		echo "Product Successfuly added";
	}
	else{
		echo "db error";
	}

	mysqli_close($link);
}

if( isset($_POST["update"]) ){

	$id = $_POST['id'];

	$title = $_POST['title'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$image1 = $_POST['image1'];
	$image2 = $_POST['image2'];
	$image3 = $_POST['image3'];
	$image4 = $_POST['image4'];	

	$db = mysqli_connect("localhost", "root", "", "lilit");

	$sql = "UPDATE `products` SET `title`='$title', `price` = '$price', `category` = '$category', `image1` = '$image1', `image2` = '$image2', `image3` = '$image3', `image4` = '$image4' WHERE id = $id";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "Product Successfuly Updated";
	}
	else{
		echo "db error";
	}
}

if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "lilit");

	$sql = "DELETE FROM products WHERE id = $id";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "Product Successfuly deleted";
	}
	else{
		echo "db error";
	}
}

?>

