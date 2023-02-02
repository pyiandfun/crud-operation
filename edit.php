
<?php
    include 'function.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM crud WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name=$row['username'];
        $email=$row['email'];
        $phone=$row['phone'];
    }


//     if(isset($_REQUEST['submit'])){
//         $name=$_POST['name'];
//         $email=$_POST['email'];
//         $phone=$_POST['phone'];
//         $sql="UPDATE crud SET username='$name', email='$email', phone='$phone' WHERE id=$id";
//         var_dump($sql);
//         mysqli_query($conn ,$sql );
//         if($result){
//         header("location: list.php");
//     }else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     } 
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD Operation</title>
  </head>
  <body>
        <div class="container m-5">
            <form action="update.php?id=<?=$id ?>" method="post">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name;?>">
                </div>
                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email;?>">
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="phone" value="<?php echo $phone;?>">
                </div>
                <input type="submit" class="btn btn-primary" name="edit"  value="Update">
            </form>
        </div>
  </body>
</html>