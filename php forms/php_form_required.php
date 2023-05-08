<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php form required</title>
</head>
<body>

    <h2>PHP Form Validition Example</h2>
    <span class="error">* required field</span>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name : <input type="text" name="name"><br><br>
        E-mail : <input type="text" name email><br><br>
        Website : <input type="text" name="website"><br><br>
        Comment : <textarea name="comment" cols="40" rows="5"></textarea><br><br>
        Gender :
            <input type="radio" name="gender" id="">Male
            <input type="radio" name="gender" id="">Female
            <input type="radio" name="gender" id="">Custom <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    
</body>
</html>