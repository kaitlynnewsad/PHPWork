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
 <header><h1>Wright State University</h1></header>   
 <main>
 <h2>End of Course Survey</h2>
<h4> Evaluate a course you took this semester </h4>
 <hr />
<form action="scripts/process.php" method="post" enctype="multipart/form-data" >
<label for=""> Class Name: </label><br />
    <input type="text" name="name" required placeholder="Type Class Name"> <br />

    <label for=""> Class ID: </label><br />
    <input type="text" name="class" required placeholder="Type Class ID"><br />

    <label for=""> Instructor Name: </label><br />
    <input type="text" name="instructor" required placeholder="Type Instructor Name"><br />

    <label for="">What did you like about the course? </label><br />
    <textarea cols="30" rows="10" name="comments" > </textarea><br /><br />
    <hr />
    <button type="submit" name="submit">Submit</button>
</form>
 </main>
</section>
<footer> &copy; Kaitlyn Newsad 2022</footer>
</body>
</html>

<?php  
$host = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS newsad; ";

$result = mysqli_query($conn, $sql);

$conn2 = mysqli_connect($host, $username, $password, "newsad");


$sql2 = "CREATE TABLE IF NOT EXISTS tbl_survey( id INT PRIMARY KEY AUTO_INCREMENT, 
        name VARCHAR(50) NOT NULL,
        class VARCHAR(10) NOT NULL,
        instructor VARCHAR(50) NOT NULL,
        comments VARCHAR(500) NOT NULL);";

$query = mysqli_query($conn2, $sql2);

?>

