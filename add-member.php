<?php
// database connection
$con = mysqli_connect('localhost', 'root', '', 'project') or die(mysqli_error($con)) ;
if(isset($_POST['submit'])){
  extract($_POST) ;
  $query = "INSERT INTO admins VALUES(null, '$email', '$password')";
  mysqli_query($con, $query) or die(mysqli_error($con)) ;
  header('location:index.php') ;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
  </head>
  <body>
    <div class="container w-50 mt-5">
      <h1 class="alert alert-info text-center text-capitalize mt-5">
        add admin
      </h1>
      <form method="post">
        <input
          type="email"
          name="email"
          placeholder="Admin email"
          class="form-control"
        /><br />
        <input
          type="text"
          name="password"
          placeholder="Admin password"
          class="form-control"
        /><br />
        <a href="index.php" class="btn btn-primary">Go back</a>
        <input
          type="submit"
          name="submit"
          value="Submit"
          class="btn btn-info"
        />
      </form>
    </div>
  </body>
</html>
