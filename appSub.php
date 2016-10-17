<?php
/**
 * Created by PhpStorm.
 * User: 1313823
 * Date: 17/10/2016
 * Time: 13:41
 */

include('dbconnect.php');
?><!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

</head>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>