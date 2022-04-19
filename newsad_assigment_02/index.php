<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <section>
 <header></header>   
 <main>
 <h3> Animals</h3>
 <h4> Enter your Favorite Animal</h4>
 <hr />
<form action="display.php" method="post" enctype="multipart/form-data" >
    <label for="">Animal Name: </label><br />
    <input type="text" name="animal_name" required placeholder="Type Animal Name"><br /><br />
    <label for="">Description: </label><br />
    <textarea cols="20" rows="9" name="comments" > </textarea><br /><br />
    
    <label for="">Image: </label><br />
    <input type="file" name="upload" id=""></input><br />
    <hr />
    <button type="submit" name="submit">Submit Info</button>
</form>
 </main>
</section>
</body>
</html>

<?php  
$host = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS newsad_hw2; ";
$result = mysqli_query($conn, $sql);

$conn2 = mysqli_connect($host, $username, $password, "newsad_hw2");

$sql2 = "CREATE TABLE IF NOT EXISTS tbl_newsad (id INT PRIMARY KEY AUTO_INCREMENT, 
        animal_name VARCHAR(50) NOT NULL,
        comments VARCHAR(255) NOT NULL,
        photo BLOB NOT NULL);";

$query = mysqli_query($conn2, $sql2);

?>