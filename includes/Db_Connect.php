<?php
    $con = new mysqli('localhost', 'root','','jounal_db');
    if($con){
        // echo"<script> alert('Connection established') </script>";
    }
    else{
    echo "Can't connect to the database".mysqli_error($con);
    }
?>    