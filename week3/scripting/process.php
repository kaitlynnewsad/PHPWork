<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            border:1px solid #000;
            width:600px;
            margin:0 auto;
            padding:11px;
        }
    </style>
</head>
<body>
    <section>
    <?php
        $fullName  =  $_POST['fname'];
        $custPhone =  $_POST['phone'];
        $custEmail =  $_POST['email'];
        echo"<p>Full Name: "    .   $fullName   .  "</p>";
        echo"<p>Phone:     "    .   $custPhone  .  "</p>";
        echo"<p>E-Mail:    "    .   $custEmail  .  "</p>";

    ?>
    </section>
</body>
</html>