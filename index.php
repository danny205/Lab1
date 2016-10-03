<?php
/**
 * Created by PhpStorm.
 * User: 1313823
 * Date: 03/10/2016
 * Time: 14:41
 */

$age = 21;
$wantedgood = "mugs";
$provisionedActivities = array("Specs",	"Mugs","Sausage rolls");

?>
<!DOCTYPE html>
<html>
<head></head>
<body>

<p>

    <?php

    /*if($age >= 16 AND $age <= 18){

        echo "You can buy specs";

    }elseif($age >= 18 AND $age < 21){

        echo "You can buy specs and mugs";

    }elseif($age >= 21){

        echo "You can buy specs, mugs and sausage rolls";

    }

    echo "</br>";
    switch ($wantedgood){

        case "specs":
            echo "You have to be over 16 to buy specs";
            break;

        case "mugs":
            echo "You have to be over 18 to buy mugs";
            break;

        case "sausage rolls":
            echo "You have to be over 21 to but sausage rolls";
            break;

    }

    echo "</br>";

    foreach($provisionedActivities as $x){
        if($x == "Mugs"){
            print "<p>Hugs</p>";
        }elseif($x == "Sausage rolls"){
            print "";
        }else{
            print "<p>$x</p>";
        }

    }*/

    for($i = 1; $i < 31;  $i++){

        $arrayTwo = array("2","4","6","8","10","12","14","16","18","20","22","24","26","28","30");
        $arrayFour = array("4","8","12","16","20","24","28");
        $arrayThree = array("3","6","9","12","15","18","21","24","27","30");

        if(in_array($i, $arrayTwo)){

            if(in_array($i, $arrayFour)){

                echo "On Day ".$i." Specs and sausage rolls are available";

            }else{

                echo "On Day ".$i." Specs are available";

            }

        }elseif(in_array($i, $arrayThree)){

            echo "On Day ".$i." Mugs are available";

        }else{

            echo "On Day ".$i." no products are available";

        }

        echo "</br>";

    }


    ?>

</p>

</body>
</html>