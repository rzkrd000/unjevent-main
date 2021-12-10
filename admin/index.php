<?php
session_start();
if( !isset($_SESSION['log'])){
    header('location: ../index.php');
    exit;
}
?>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">       
</head>
        <body>
            <h1>Hai</h1>
            <a href="logout.php" class="btn btn-info" onclick="return confirm('Yakin Logout?')">LogOut</a>
        </body>
</html>