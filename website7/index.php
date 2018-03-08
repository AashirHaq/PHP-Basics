<?php
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';
    
    /*
    //Return filename
    echo basename($path);
   
    
    //Return filename without extension
    echo basename($path , '.php');
 
    
    //Return dir name from path
    echo dirname($path);
     
    
    //check if file exists
    echo file_exists($file);

    echo realpath($file);

    
    //check to see if file
    echo is_file('test');

    
    //check if writable
    echo is_writable($file);
    
   //check if readable
    echo is_readable($file);

    
    //get file size
    echo filesize($file);

    
    //create a directory
    mkdir('text2');

    
    //delete directory if empty
    rmdir('text2');
    
     
    
    //Copy file
    echo copy($file, 'file2.txt');
     
    
    //Rename file
    rename('file2.txt', 'myFile.txt');
    
     
    
    //Delete file
    unlink('myFile.txt');
     
     
    
    //write from to string
    echo file_get_contents($file);
   
    
    //write string to file
    echo file_put_contents($file, 'Hello World');
    
    $current = file_get_contents($file);
    $current .= ' Goodbye';
   echo file_put_contents($file, $current);
           
    
    //open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);

    */
    //open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "Aashir\n";
    fwrite($handle, $txt);
    $txt = "Sohaib\n";
    fwrite($handle, $txt);
    fclose($handle);
