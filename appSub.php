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

Name: <?php echo $_GET["first"]; echo " "; echo $_GET["second"]; ?><br>
Gender: <?php echo $_GET["gender"]; ?><br>
Power: <?php echo $_GET["power"]; ?>

</body>
</html>