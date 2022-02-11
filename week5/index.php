<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/main.css" rel="stylesheet" >
    <!-- href is a realtive path -->


</head>
<body>
    <!-- One div  is a tag. Having both divs is a element -->
    <div> 
    </div>


    <sectioon style="font-size: 20px;"> 
    <hedaer> <nav>  </nav>  
    
    </hedaer>
    <main> 
        <h3> Book Club Registration</h3>

    <!-- Create a form for a book club-->
    <form action="scripts/process.php" method="post">
    <input type text="text" name="fname" placeholder="Enter First Name">
    <br />
    <input type text="text" name="lname" placeholder="Enter Last Name">
    <br />
    <input type text="tel" name="phone" placeholder="Enter Your Phone">
    <br />
    <input type text="email" name="email" placeholder="Enter your Email">
    <br />
    <label for =""> Comments:</label>
    <br />
    <textarea cols="20" rows= "15" name="comments">
    </textarea>
    <br />


    <!-- Single checkbox -->
    <!-- input type = "checkbox"  name =" graduate" value ="yes" > Graduate Student -->

    <!-- Mutiple checkboxes -->
    <!-- Pass them  througth an array -->
    <input type = "checkbox"  name = education[]" value ="Graduate Student" > Graduate Student <br />
    <input type = "checkbox"  name ="education[]" value ="Under Graduate Student" > Under Graduate Student <br />
    <input type = "checkbox"  name ="education[]" value ="High School Student " > High School Student <br />
    <input type = "checkbox"  name ="education[]" value ="Road Scholar" > Road Scholar <br />
    <br />
    <input type ="submit" value ="Click to Register">
    </form>
    </main>

    </sectioon>
</body>
</html>
