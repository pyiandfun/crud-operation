<?php
    include 'function.php';
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
            <button class="btn btn-primary"> <a href="index.php" class="text-light">Add User</a></button>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Operation</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $sql = "SELECT * FROM crud";
                $result = mysqli_query($conn, $sql);
                if($result){
                    // $row=mysqli_fetch_assoc($result);
                    // echo $row['username'];
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['username'];
                        $email=$row['email'];
                        $phone=$row['phone'];
                        echo '
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$phone.'</td>
                            <td>
                                <button type="submit" class="btn btn-primary"><a href="edit.php?id='.$id.'" class="text-light">Edit</a></button>
                                <button type="submit" class="btn btn-dark"><a href="delete.php?delete='.$id.'" class="text-light">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }
              ?>
            </tbody>
          </table>
        </div>
  </body>
</html>