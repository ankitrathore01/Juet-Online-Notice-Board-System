<?php

    include "database.php";
    session_start();
    $failed=0;
if(isset($_POST['op'])){
    
    $op = $_POST['op'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($op=="login")
    {
        $sql = "SELECT id,name FROM users WHERE email='$email' AND PASSWORD('$pass') = password";
        $result = mysqli_query($link,$sql);

        // FAILED LOGIN
        if (mysqli_num_rows($result)==0)
        {
             //echo "Nothing found here";
             $failed=1;
        }

        // SUCCESS LOGIN
        else
        {
            //echo "Found! Login OK!";
            $row = $result->fetch_row();

            $db_id = $row[0];
            $db_name = $row[1];

            //echo "<br><br>ID: $db_id  Name: $db_name";

            setcookie("auth_id","$db_id");
            setcookie("auth_email","$email");
            /*if user $_POST username and password is correct then*/
            $_SESSION['loggedin'] = 1;
            //echo "Success! Cookie value: " . $_COOKIE['auth_id'];
            if($email == "admin@admin.com" && $pass == "admin"){
              header("Location: ./admin/index.php");
            }
            else{
              header("Location: ./user/index.php");
            }
            

            exit;
        }



    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">JUET Online Notice Board</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="registration.php">Register<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Entrance of JUET</h5>
        <p>This is the main gate of our University.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>JUET Lake</h5>
        <p>An aerial view of Lakeside at JUET campus.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Night Sight</h5>
        <p>The lake area during an evening.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-4">
<p class="h5">Please Login Here!</p>
<hr>
</div>

<div class="container p-3 col-md-4">

    <?php
    if ($failed==1)
    {
    ?>
              <div class="panel panel-danger">
                <div class="panel-heading">Login error</div>
                <div class="panel-body">Wrong login or password</div>
              </div>

    <?php
    }
    ?>

    <div class="panel panel-default container">
    <div class="panel-body">


        <form method=POST action=login.php>

            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" autocomplete=off required name="email"/>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control"  required name="pass"/>
            </div>


            <div class="form-group">
                <label></label>
                <input type="submit" class="btn btn-primary" value="Login"/>
            </div>

            <input type="hidden" name="op" value="login" />

        </form>
    </div>
    </div>
</div>

<div class="container mt-4 mb-4">
    <a href="registration.php">New Here? Register!</a>
</div>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Made with <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg> by JUETians.</span>
  </div>
</footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
