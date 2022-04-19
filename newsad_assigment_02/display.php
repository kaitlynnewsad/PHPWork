<?php
// Insert values to table
$host = "localhost";
$username = "root";
$password = "";
$conn2 = mysqli_connect($host, $username, $password, "newsad_hw2");
if(isset($_POST['submit']))
{
    $animal = $_POST['animal_name'];
    $comment = $_POST['comments'];
    $imageName =  $_FILES['upload']['name'];
    $tempName  =  $_FILES['upload']['tmp_name'];

    // need the name of the images folder
    $folderName = 'images/';
    // create instructions to direct images to the folder images
    move_uploaded_file( $tempName, $folderName.$imageName);


    $sql3 = "INSERT INTO `tbl_newsad`(`animal_name`, `comments`, `photo`) 
    VALUES ('$animal','$comment','$imageName');";

    $run = mysqli_query($conn2 , $sql3);


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Favorite Animals</title>
    <link href="css/display.css" rel="stylesheet">
</head>
<body>
    <h3> List of current favorite animals</h3>
<?php
$host = "localhost";
$username = "root";
$password = "";
$conn4 = mysqli_connect($host, $username, $password, "newsad_hw2");

$mysql = "SELECT * FROM tbl_newsad ;";

$result = mysqli_query($conn4, $mysql);
$check = mysqli_num_rows($result);
?>

<table>
<tr>
<th>Name</th>
<th>Description</th>
<th>Photo</th>
</tr>

<?php
if ($check > 0)
{
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>"; 
         echo "<td>" .  $row['animal_name']  .  "</td>";
        echo "<td>" .  $row['comments']  .  "</td>";
        echo "<td> <img src='images/" .  $row['photo']. "'></td>";
        
        echo"</tr>";
    }
}

?>

</table>
</body>
</html>


