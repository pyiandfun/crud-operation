<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO crud (username, email, phone) VALUES ('$name', '$email', '$phone')";
    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        header('location:list.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['read'])) {
    $sql = "SELECT * FROM crud";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["username"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}


?>