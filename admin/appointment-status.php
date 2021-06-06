<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "hospital management";
 
 $conn = new mysqli($server,$user,$password,$database);

 $email = $_GET['email'];
 $update = "UPDATE appointments SET approve=1 WHERE email='$email' ";
 $conn->query($update);
?>