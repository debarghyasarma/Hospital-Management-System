<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "hospital management";
 
 $conn = new mysqli($server,$user,$password,$database);
 $id = (int) $_GET['id'];
 
 $update = "UPDATE patient_register SET approve=1 WHERE pid=".$id."";
 $conn->query($update);
?>