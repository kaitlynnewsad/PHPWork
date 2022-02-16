<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Functions in PHP</h3>  

<?php 
        $n2=25;
        $n1=50;

    
        // Functions
        // () called the agruments 
        function myFirstFunction($number = 100)
        {
            // code goes here;
            echo ("Hello World");

            echo "<p>$number</p>";
        }

        // Call function to have it work
        myFirstFunction();

        //Chaange value of agurment to 350
        myFirstFunction(350);



        function calculate($num1 , $num2)
        {
            // $num1 , $num2 local variables of the function
            echo"<P>Number 1 + Number 2 = " . $num1+$num2 . "</P>";
        }

        calculate($n1, $n2);
        // n1 and n2 are global variables for this php

        // HTML Elements
        // Two types block and inline whiich are behavior of elements
        // Block Elements: <p></p>, h1-h6


        //Containers (which are basically block elements that you can nest inside eachother)
        // section, aside, footer, and article


        function user($admin)
        {
            return ($admin);
        }

        $name = "Kaitlyn";
        // Assign call statement $myAdmibName to varibale/function
        $myAdminName = user($name);
        echo "$myAdminName";

        // Built-In Functions
        // Examples: str_replace, trim, etc.
        $greeting = "Hello World";
        str_replace("World" , "Kaitlyn" , $greeting );
        echo "$greeting";
        //or echo (str_replace("World" , "Kaitlyn" , $greeting ));)
        

?>





</body>
</html>