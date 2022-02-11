<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>First PHP page</h2>
    <!--  -->
    <div>
        <?php
        // Singel line comment
        /* can be singel line or multi-line  
         */
        # This is another way of commenting
            echo '<p style="color:red";>Hello Class of 2021! </p> ';
            ECHO ("<p>Say Hello again</p>");
            print("Wright State University, best place");
            echo "<br />";
            PrInt('Hello from missed up print');
            //Variables == Containers holds data
            //integer, float, double,string,boolean
            //objects like arrays, class

            // declare variable and assign value to it
            $num1 = 10;
            $num2 = 10.5;
            CONST TAX_RATE= 0.75;
            $num3;
        ?>
        <?php
          echo"<p>Num 1 = " .  $num1 . "</p>";
          echo"<p>Num 1 + Num 2 = " .  ($num1  +  $num2) . "</p>";
           $schoolName= "Wright State University";
           $yearFounded = 1976;
           $undergraduate=true;


        ?>

        
    </div>
</body>
</html>