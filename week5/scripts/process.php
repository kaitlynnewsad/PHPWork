<?php 
$firstName  = $_POST['fname'];
$lastName   = $_POST['lname'];
$phone      = $_POST['phone'];
$email      = $_POST['email'];
$feedback =  $_POST['comments'];
$checked  = $_POST['education'];

echo "<p> $firstName </p>";
echo "<p> $lastName </p>";
echo "<p> $phone  </p>";
echo "<p> $email  </p>";
echo "<p> $feedback</p>";



$counter = count($checked );
echo "<p> $counter</p>";
for ($index = 0; $index <$counter; $index++)
{
echo "<p> $checked[$index] </p>"; 
}

?>