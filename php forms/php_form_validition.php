<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Validition</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php
			$name = $email = $comment = $gender = $website = "";

			if ($_SERVER['REQUEST_METHOD'] == "POST"){
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$website = test_input($_POST["website"]);
				$comment = test_input($_POST["comment"]);
				$gender = test_input($_POST["gender"]);
			}

			function test_input($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
	?>


	<h1>PHP Form Validition Example</h1>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		<label>Name : <input type="text" name="name"></label><br><br>
		<label>E-mail : <input type="text" name="email"></label><br><br>
		<label>Website : <input type="text" name="website"></label><br><br>
		<label>Comment <br>
			 <textarea name="comment" rows="5" cols="40" ></textarea>
		</label><br><br>
		<label>
			Gender : 
			<input type="radio" name="gender" value="male">Mail
			<input type="radio" name="gender" value="femal">Femal
			<input type="radio" name="gender" value="other">Other
		</label><br><br>
		<input type="submit">
		
	</form>

	<?php
		echo "<h2>Your Input : </h2>";
		echo "Name : " .$name;
		echo "<br>";
		echo "E-mail : ".$email;
		echo "<br>";
		echo "Website : ".$website;
		echo "<br>";
		echo "Comments : ".$comment;
		echo "<br>";
		echo "Gender : ".$gender;
	?>
	
</body>
</html>