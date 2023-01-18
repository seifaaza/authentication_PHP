
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
    <div class="container mt-5 w-50">
      <h1 class="alert alert-primary text-center text-capitalize">login</h1>
      <form method="post">
        <label>Email</label>
        <input
          type="text"
          name="email"
          placeholder="Your email"
          class="form-control"
        /><br />
        <label>Password</label>
        <input
          type="text"
          name="password"
          placeholder="Your password"
          class="form-control"
        /><br />
        <input
          type="submit"
          value="Login"
          name="submit"
          class="btn btn-primary"
        />
        </form>


<?php
if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost', 'root', '', 'project') or die(mysqli_error($con)) ;
    extract($_POST) ;
    $query = "SELECT email, pass from admins where email = '$email' and pass = '$password' " ;
    $result = mysqli_query($con, $query) or die(mysqli_error($con)) ;

    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    $count = mysqli_num_rows($result);

// login validation
    if($count == 1){
        session_start();
        $_SESSION['loggedUser'] = $email ;
        header('location:index.php') ;
    }else {
        echo"<h5 class='alert alert-danger text-center text-capitalize mt-5 w-50 '>email or password incorrect !</h5> " ;
    }
}

?>
</div>

  </body>

</html>
