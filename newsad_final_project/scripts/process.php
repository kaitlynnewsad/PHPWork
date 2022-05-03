<?php
// Insert values to table
$host = "localhost";
$username = "root";
$password = "";
$conn2 = mysqli_connect($host, $username, $password, "newsad");
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $class = $_POST['class'];
    $instructor = $_POST['instructor'];
    $comments = $_POST['comments'];



    $sql3 = "INSERT INTO `tbl_survey`(`name`, `class`, `instructor`, `comments`) 
    VALUES ('$name','$class','$instructor', '$comments');";

    $run = mysqli_query($conn2 , $sql3);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Results</title>
    <link href="../css/process.css" rel="stylesheet">
</head> 
<body>
    <h3> Evaluations of courses</h3>
<?php
$host = "localhost";
$username = "root";
$password = "";
$conn4 = mysqli_connect($host, $username, $password, "newsad");

$mysql = "SELECT * FROM `tbl_survey` ;";

$result = mysqli_query($conn4, $mysql);
$check = mysqli_num_rows($result);
?>

<table>
<tr>
<th>Class Name </th>
<th>Class ID</th>
<th>Instructor Name</th>
<th>Comments</th>
</tr>

<?php
if ($check > 0)
{
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>"; 
         echo "<td>" .  $row['name']  .  "</td>";
        echo "<td>" .  $row['class']  .  "</td>";
        echo "<td>" .  $row['instructor']  .  "</td>";
        echo "<td>" .  $row['comments']  .  "</td>";
        
        echo"</tr>";
    }
}

?>

</table>
</body>
</html>