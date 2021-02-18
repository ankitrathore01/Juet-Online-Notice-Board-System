<?php

    $link = mysqli_connect("localhost","root","","jonb");
    if (!$link)
    {
        echo "MySQL Error: " . mysqli_connect_error();
    }


?>