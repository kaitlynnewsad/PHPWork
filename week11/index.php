<?php

//Connection to Database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'com_pro';

// Can use $link or $conn
$link = mysqli_connect($host, $user, $pass, $dp);

// Check to see if you are connected
//if (!$link)
//{
    //echo '  <script>    alert("Failed to connect");    </script>';
//}
//else 
//{
   // echo '  <script>    alert("Connected");             </script> ';
//}


// See if button is pressed
if (isset($_POST['submit'])){

    // declare variables
    $full_name = $_POST['fullName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $imageName = $_FILES['upload']['name']; // imageName is an array
    $tempName = $_FILES['upload']['tmp_name'];

    // need the name of the images folder
    $folderName = 'images/'; // Images folder is located in the root

    // Create instructions to direct imgaes to folder called 'images'
    move_uploaded_file($tempName, $folderName.$imageName);

    // Insert data into database
    $sql = "INSERT INTO `tbl_pro`(`name`, `phone`, `email`, `photo`) 
    VALUES('$full_name', '$phone', '$email', '$imageName');";

    // run the query
    $run = mysqli_query($link, $sql);

    // Check to see if values are inserted
    if (!$run)
    {
    echo '  <script>    alert("Failed to insert");    </script>';
    }
    else 
    {   
    echo '  <script>    alert("All Inserted");             </script> ';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3> Learning how to deal with images using php code</h3> 

   <form action="" method="post" enctype="multipart/form-data">
        <label for="">Name: </label><br />
        <input type="text" name="fullame" required placeholder="Type Your Full Name"> <br />
        <label for="">Phone: </label><br />
        <input type="text"  name="phone" required placeholder="Enter Phone Number"> <br />
        <label for="">E-mail: </label><br />
        <input type="text" name="email" required placeholder="Enter Your E-mail"> <br />
        <label for="">Image: </label><br />
        <input type="file" name="upload" id=""> <br />
        <button name="Submit">Submit Info</button>


        
   </form>
</body>
</html>
