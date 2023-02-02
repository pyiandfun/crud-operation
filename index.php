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
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" class="form-control" value="<?php echo isset($_POST['id']) ? $_POST['id'] : ''; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                </div>
                <a href="list.php">
                    <input type="submit" class="btn btn-primary" name="create" value="Create">
                </a>
               <input type="submit" class="btn btn-primary" name="read" value="Read">
                 <!-- <input type="submit" class="btn btn-primary" name="update" value="Update">
                <input type="submit" class="btn btn-primary" name="delete" value="Delete"> -->
            </form>
        </div>
  </body>
</html>