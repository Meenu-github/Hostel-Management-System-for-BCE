<?php
$server = "localhost";
    $username = "root";
    $password = "";
    $db = "hstl_mngmt";

    $con = mysqli_connect($server, $username, $password, $db);

    if (!$con){
        die("<script>Connection failed due to </script>" . mysqli_connect_error());
    }
    else{
        echo "<script>Successfull connection</script>";
    }
    session_start();
    error_reporting(1);
    
?>    
