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
            <h3>Registration Form</h3>
            <form action="scripting/process.php"     method="post"    >
            <input type="text" name="fname" placeholder="Enter your name">
            <br />
            <input type="text" name="phone" placeholder="enter your phone number">
            <br />
            <input type="text" name="email" placeholder="enter your email">
            <br />
            <button type="submit" name="submit">Submit</button>
            </form>
    </section>

</body>
</html>