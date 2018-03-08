<?php

    //create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSOWRD, DB_NAME);

    //check the connection
    if (mysqli_connect_errno()){
        //connection failed
        echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }