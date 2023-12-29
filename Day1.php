<!-- Questions -->


<!-- 1. Create a PHP script that declares two variables: $firstName and $lastName. Assign your own first and last name to these variables. Write a function called createUsername that takes these two variables as parameters, concatenates them, and returns a username in lowercase with no spaces and @ at the beginning. Finally, display the generated username using echo or print.
Example:
Input: firstname = “Roshan”, lastname = “Shrestha”.
Output: “@roshanshrestha” -->

<!-- 2.Create a PHP script that declares three variables: $num1, $num2, and $result. Assign any numeric values to $num1 and $num2. Write a function called calculateSum that takes these two variables as parameters, calculates their sum, and stores the result in the $result variable. Finally, display the result using echo or print. Additional requirement, If the result is the floating point number, Round up the result to the ceiling value.
Example:
Input: num1 = 5.6, num2 = 5
Output: 11 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//task 1
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

    echo("<br><br>");
    
    //task 2
    $num1 = 5.6;
  $num2 = 5;
  
 
  function calculateSum($num1,$num2)
     {
     	echo(round($num1+$num2));
     
     }
     
     calculateSum($num1,$num2);
    
    ?>
</body>
</html>



