<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Contact Form</title>
    <link  href="css/main.css"  rel="stylesheet"  >

</head>
<body>
    
<section>
        <header>
            <nav></nav>
            </header>
        <main>
            <h3>Contact Form</h3>
            <h6>Please fill in your information</h6>
            <hr />
            <form action="scripts/process.php"  method="post">
            <label for="name">Your Name: </label>
            <input type="text"  name="name"  id="name"  required>
            <br>
            <label for="email">Your Email:</label>
            <input type="email"  name="email" id="name" required>
            <br />
            <label id="phoneLabel" for="phone">Phone:</label>
            <input type="tel"  name="phone" id="phone" required>
            <br />
            <label id="remeberLabel" for="remember">Remember Me:</label>
            <input type="checkbox"  name="remember" value="Yes" required>
            <br />
            <label  id="commentLabel" for="comments">Messages: </label>
            <br />
            <textarea id="comments" cols="20" rows="9" name="comments">
            </textarea>
              <br/>
              <hr />
            <button type="submit"   name="submit">Submit Form</button>
            </form>
        </main>
        </section>
</body>
</html>
