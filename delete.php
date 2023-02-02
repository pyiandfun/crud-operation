<?php
include 'function.php';
if (isset($_REQUEST['delete'])) { 
    $id = $_REQUEST['delete'];
    mysqli_query($conn , "DELETE FROM crud WHERE id=$id");
    header("Location: list.php");
}else{
    header("Location: list.php");   
}