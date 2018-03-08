<?php 
    require('config/config.php');
    require('config/db.php');
    
    //create query
    $query = "SELECT * FROM `post` ORDER BY created_at DESC";
    
    //get result
    $result = mysqli_query($conn, $query);
   
    
    //Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($posts);
    
    //free result
    mysqli_free_result($result);
    
    //close connection
    mysqli_close($conn);
    
    ?>

<?php include('inc/header.php'); ?>
        <div class="container">
            <h1>Post</h1>
            <?php foreach ($posts as $post): ?>
            <div class="well" >
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?></small>
                    <?php echo $post['author'] ?>
                    <p><?php echo $post['body'] ?></p>
                    <a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read more</a>
                </div>
            <?php endforeach; ?>
        </div>
<?php include('inc/footer.php') ?>