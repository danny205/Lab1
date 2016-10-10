<?php

$db = new mysqli("us-cdbr-azure-southcentral-f.cloudapp.net","b42d75f25c6292","43152099","dannydb");

if($db->connect_errno){
    die(Connectfailed[".$db->connect_error."]);
}else{
    echo 'working';
}

?>
