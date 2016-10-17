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
<form action="appSub.php" method="post">
    <input placeholder="firstname" type=“text” name=“forename”>
    <input placeholder="surname"type=“text” name=“surname”>
    <input placeholder="gender" type=“text” name=“gender”>
    <input placeholder="power" type=“text” name=“power”>
    <input type="submit" value="Submit">
</form>
</body>
</html>