<?php 
    require('config/config.php');
    require('config/db.php');
    
    //check for submit
    if (isset($_POST['delete'])) {
        //get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
        
        $query = "DELETE from `post` WHERE id={$delete_id}";
        //die($query);
        if (mysqli_query($conn, $query)) {
            header('Location:'.ROOT_URL.'');
        }else{
            echo 'Error: '. mysqli_error($conn);
        }
    }
    //get id
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    
    //create query
    $query = "SELECT * FROM `post` WHERE id=$id";
    
    //get result
    $result = mysqli_query($conn, $query);
   
    
    //Fetch data
    $post = mysqli_fetch_assoc($result);
    //var_dump($posts);
    
    //free result
    mysqli_free_result($result);
    
    //close connection
    mysqli_close($conn);
    
    ?>

<?php include('inc/header.php'); ?>
        <div class="container">
            <a href="<?php echo ROOT_URL ?>" class="btn btn-default">Back</a>
            <h1><?php echo $post['title']; ?></h1>
            <small>Created on <?php echo $post['created_at']; ?></small>
            <?php echo $post['author'] ?>
            <p><?php echo $post['body'] ?></p>
            <hr>
            <form class="pull-right" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                    
            </form>
            
            <a class="btn btn-default" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edit</a>
        </div>
<?php include('inc/footer.php') ?>