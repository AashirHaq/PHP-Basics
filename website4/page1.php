<?php
    if (isset($_POST['submit'])) {
        session_start(); //start session
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        
        header('Location: page2.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Session</title>
    </head>

    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="name" placeholder="Enter Name">
            <br>
            <input type="text" name="email" placeholder="Enter Email">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
    </body>

</html>