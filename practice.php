<html>
    <head>
        <title>Practice</title>
    </head>
    <body>
        <h1>Practice</h1>
        <p>This is a practice page.</p>
        <form  method="POST">
            username: <input type="text" name="username"><br><br>
            password: <input type="password" name="password"><br><br>
            <input type="submit" value="Submit">
        </form>
        
    </body> 
</html>
<?php
       echo $_POST['username'] ?? 'No username provided';
       echo "<br><br>";
       echo $_POST['password'] ?? 'No password provided';
       echo "<br><br>";
?>