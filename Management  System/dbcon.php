<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    
    if (isset($_POST["student"])) {
        $db = "student";
    }

    $con = mysqli_connect($server, $user, $pass, $db);
?>