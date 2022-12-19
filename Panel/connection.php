<?php
 session_start();
$con = mysqli_connect("localhost", "root", "","tjadminlogin");

if(mysqli_connect_error()){
    echo  "Cannot conect";
    // exit();
}
?> 