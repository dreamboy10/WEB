<?php 
	require_once('lib/print.php');
	require_once('view/top.php');
?>
	<a href="create.php">create</a>
	<?php 
		if(isset($_GET['id'])) {
	?>
	<a href="update.php?id=<?php echo $_GET['id']?>">update</a>
	<form action="delete_process.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
		<input type="submit" value="delete">
	</form>
	<?php 
		}
	?>

	<h2>
		<?php
			print_title();
		?>
	</h2>
	<?php
		print_description();
	?>
<?php 
	require_once('view/bottom.php');
?>