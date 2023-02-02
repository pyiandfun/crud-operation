<?php
include 'function.php';
if (isset($_REQUEST['edit'])) { 
    $id = $_REQUEST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    mysqli_query($conn , "UPDATE crud SET username='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location: list.php");
}else{  
    // echo ('error');  
    header("Location: list.php");
}
?>