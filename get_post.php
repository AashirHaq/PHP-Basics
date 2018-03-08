<?php
//if (isset($_GET['name'])) {
//    echo htmlentities($_GET['name']);
//}
//if (isset($_POST['name'])) {
//    print_r($_POST);
//    echo htmlentities($_POST['name']);
//}

//if (isset($_REQUEST['name'])) {
//    //print_r($_REQUEST);
//    echo htmlentities($_REQUEST['name']);
//}

echo $_SERVER['QUERY_STRING'];
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>get & post</title>
    </head>

    <body>
        <form method="GET" action="get_post.php">
            <div>    
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>
    </body>

</html>