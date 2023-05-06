<!DOCTYPE HTML>
<html>  
<body>



	<form action="php_form_handling.php" method="post">
		Name: <input type="text" name="name"><br><br>
		Name: <input type="text" name="email"><br>
		<input type="submit">
	</form>

	<!-- <?php echo $_POST["name"]; ?><br>
	<?php echo $_POST["email"]; ?> -->



	Welcome <?php echo $_POST["name"]; ?><br>
	Your email address is: <?php echo $_POST["email"]; ?>


</body>
</html>