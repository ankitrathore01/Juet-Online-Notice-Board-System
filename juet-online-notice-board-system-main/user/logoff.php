<?php

session_start();
unset($_SESSION['loggedin']);
$_SESSION['loggedin'] = 0;

?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Logoff</title>
</head>

<body>
    <h1>Logoff successful!</h1>
<a href="../login.php">Login</a>

</body>

</html>