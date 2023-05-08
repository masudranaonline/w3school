<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form required</title>
</head>
<body>

    <?php
          $nameErr = $emailErr = $genderErr = $websiteErr = "";
          $name = $email = $gender = $comment = $website = "";
      
          if($_SERVER["REQUEST_METHOD"] == "POST") {
              if(empty($_POST['name'])) {
                  $nameErr = "Name is required";
              }else{
                $name = test_input($_POST["name"]);
              }
              if(empty($_POST["email"])) {
                $emailErr = "Email is required";
              }else {
                $email = test_input($_POST['email']);
              }
              if(empty($_POST["website"])){
                $website = "";
              }else{
                $website = test_input($_POST["website"]);
              }
              if(empty($_POST["comment"])){
                $comment = "";
              }else {
                $comment = test_input($_POST["comment"]);
              }
              if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
              }else {
                $gender = test_input($_POST["gender"]);
              }
          }
    ?>

    <h2>PHP Form Validition Example</h2>
    <span class="error">* required field</span>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name : <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?></span><br><br>
        E-mail : <input type="text" name email>
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        Website : <input type="text" name="website">
        <span class="error"><?php echo $websiteErr; ?></span><br><br>
        Comment : <textarea name="comment" cols="40" rows="5"></textarea><br><br>
        Gender :
            <input type="radio" name="gender" id="">Male
            <input type="radio" name="gender" id="">Female
            <input type="radio" name="gender" id="">Custom
            <span class="error">* <?php echo $genderErr;?></span><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    
</body>
</html>