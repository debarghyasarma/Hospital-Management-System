<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "hospital management";
 
 $conn = new mysqli($server,$user,$password,$database);
 $id = (int) $_GET['id'];
 
 $update = "UPDATE doctor_register SET approve=1 WHERE rno=".$id."";
 $conn->query($update);
?>