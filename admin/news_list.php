<?php  
$db = mysqli_connect("localhost", "root", "", "lilit");
$sql = "SELECT * FROM products";
$result = mysqli_query($db, $sql);				
?>

<table border="1">
	<tr>
		<td>id</td>
		<td>Անվանում</td>
		<td>Գին</td>
		<td>Թարմացնել</td>
		<td>Հեռացնել</td>
	</tr>

	<?php  
	while( $r = mysqli_fetch_assoc($result) ){
	?>
		<tr>
			<td><?php echo $r['id']; ?></td>
			<td><?php echo $r['title']; ?></td>
			<td><?php echo $r['price']."֏"; ?></td>
			<td>
				<a href="update.php?id=<?php echo $r['id']; ?>">
					Թարմացնել
				</a>
			</td>
			<td>
				<a href="action.php?action=delete&id=<?php echo $r['id']; ?>">
					Հեռացնել
				</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>