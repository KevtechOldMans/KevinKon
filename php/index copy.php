<!DOCTYPE html>
<html>

    <head>
    <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <?php
            $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100);

            $name = $email = $gender = $comment = $website = "";
            $name_err = $email_err = $gender_err = $website_err = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                  $nameErr = "Name is required";
                } else {
                  $name = test_input($_POST["name"]);
                }
            
                if (empty($_POST["email"])) {
                  $emailErr = "Email is required";
                } else {
                  $email = test_input($_POST["email"]);
                }
                  
                if (empty($_POST["website"])) {
                  $website = "";
                } else {
                  $website = test_input($_POST["website"]);
                }
              
                if (empty($_POST["comment"])) {
                  $comment = "";
                } else {
                  $comment = test_input($_POST["comment"]);
                }
              
                if (empty($_POST["gender"])) {
                  $genderErr = "Gender is required";
                } else {
                  $gender = test_input($_POST["gender"]);
                }
              }
              
              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name"> <br>
            E-mail: <input type="text" name="email"> <br>
            Website: <input type="text" name="website"> <br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br>
            Gender:<br>
            <input type="radio" name="gender" value="female">Female<br>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="other">Other<br>
            <input type="submit">
        </form>

        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>
    </body>
</html>