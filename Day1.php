<!-- Create a PHP script that declares two variables: $firstName and $lastName. Assign your own first and last name to these variables. Write a function called createUsername that takes these two variables as parameters, concatenates them, and returns a username in lowercase with no spaces and @ at the beginning. Finally, display the generated username using echo or print.
Example:
Input: firstname = “Roshan”, lastname = “Shrestha”.
Output: “@roshanshrestha” -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $firstName="SOvaa";
    $lastName="Kushwaha";
    function Createusername($firstName,$lastName){
        $firstName=strtolower($firstName);
        $lastName=strtolower($lastName);
        echo("@".$firstName.$lastName);
    }
    Createusername(
        $firstName,$lastName
    );
    
    ?>
</body>
</html>