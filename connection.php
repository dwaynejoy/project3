<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $conn = mysqli_connect("localhost", "root", "", "db_hfx_proj_3");
     
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());  
    }
    
?>
