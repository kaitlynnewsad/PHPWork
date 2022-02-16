<?php
$name = $_POST['name'];
$email     = $_POST['email'];
$phone    = $_POST['phone'];
$checked = $_POST['remember'];
$comments   = $_POST['comments'];


echo " <p> Your Name: " . $name . "</p>" ;
echo " <p> Your Email: " . $email . "</p>" ;
echo " <p> Your Phone: " . $phone. "</p>" ;
echo " <p> Remember Me: " . $checked . "</p>" ;
echo " <p> Message: " . $comments . "</p>" ;



?>
