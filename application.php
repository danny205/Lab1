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
<form action="appSub.php" method="get">
    Firstname: <input type="text" name="first"><br>
    Secondname: <input type="text" name="second"><br>
    Gender: <input type="text" name="gender"><br>
    Power: <input type="text" name="power"><br>
    <input type="submit">
</form>
</body>
</html>