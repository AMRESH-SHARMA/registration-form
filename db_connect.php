<?php

// creating datbase connection
$conn = mysqli_connect("localhost","root","","regform");

// connection check

if(!$conn)           // if not connected, display above message
    {
        die("Failed to connect". mysqli_connect_error());
    }
else                 // if get connected, display below message
    {
                    //sending data to database
    }
?>
