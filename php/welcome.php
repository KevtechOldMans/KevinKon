<!Doctype html>
<html>
    <head>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"> <br>
        E-mail: <input type="text" name="email"> <br>
        Website: <input type="text" name="website"> <br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br>
        Gender:<br>
        <input type="radio" name="gender" value="female">Female<br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="other">Other<br>
    </form>
    </body>
</html>