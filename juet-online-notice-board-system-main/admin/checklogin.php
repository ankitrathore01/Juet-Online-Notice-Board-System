<?php

session_start();
if ( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 0 )
{
echo "<script type='text/javascript'>alert('You need to login !')</script>";
header ("Location: ../login.php");
flush();
exit();
}
?>