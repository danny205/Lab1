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
<?php
$firstname = $_POST["forename"];
$surname = $_POST["surname"];
$gender = $_POST["gender"];
$power = $_POST["power"];


echo "Name = " . $firstname . " " . $surname. ". Gender = " . $gender . ". Power = " . $power . ".";
?>
</body>
</html>