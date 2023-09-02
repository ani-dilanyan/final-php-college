<html>
<head>
	<title>Ադմին</title>
</head>
<body>
	<h1>Ավելացնել նոր պրոդուկտ</h1>
	<form action="action.php" method="post">
		<input type="text" name="title" placeholder="Անվանում"> <br><br>
		<input type="number" name="price" placeholder="Գին"> <br><br>
		<input type="text" name="category" placeholder="Ենթաբաժին"> <br><br>
		<textarea name="image1" placeholder="նկար1" rows="3" cols="60"></textarea> <br><br>
		<textarea name="image2" placeholder="նկար2" rows="3" cols="60"></textarea> <br><br>
		<textarea name="image3" placeholder="նկար3" rows="3" cols="60"></textarea> <br><br>
		<textarea name="image4" placeholder="նկար4" rows="3" cols="60"></textarea> <br><br>
		<input type="submit" name="add" value="Ավելացնել">
	</form>

	<?php include('news_list.php') ?>
</body>
</html>