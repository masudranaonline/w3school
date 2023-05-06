<!DOCTYPE HTML>
<html>  
<body>



<!-- 	<form action="php_form_handling.php" method="post">
		Name: <input type="text" name="name"><br><br>
		Name: <input type="text" name="email"><br>
		<input type="submit">
	</form> -->

	<!-- <?php echo $_POST["name"]; ?><br>
	<?php echo $_POST["email"]; ?> -->



<!-- 	Welcome <?php echo $_POST["name"]; ?><br>
	Your email address is: <?php echo $_POST["email"]; ?> -->


	<form action="php_form_handling.php" method="get">
		Name : <input type="text" name="name"><br><br>
		E-mail : <input type="text" name="email"><br><br>
		<input type="submit">
		<h1>Welcome : <?php echo $_GET['name']; ?></h1>
	<h1>Your mail address id : <?php echo $_GET['email']; ?></h1>
	</form>



</body>
</html>