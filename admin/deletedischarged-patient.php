<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "hospital management";
 
 $conn = new mysqli($server,$user,$password,$database);
 $id = (int) $_GET['id'];
 
 $update = "DELETE FROM patient_register WHERE pid=".$id."";
 $conn->query($update);
?>