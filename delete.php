<?php
    include("connect.php");
    $id = $_GET['student_id'];
    $q = "DELETE FROM event_database.event_list where student_id = $id ";
    mysqli_query($con,$q);    
header("location:index.php");

?>
