<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Request glabal variable</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label>Name: <input type="text" name="fname" ></label>
		<input type="submit">
	</form>

	<?php

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$name = htmlspecialchars($_REQUEST['fname']);
			if(empty($name)){
				echo "Name is empty";
			}else
				echo $name;
		}
	?>
	
</body>
</html>