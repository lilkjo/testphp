<?php

$db_name = 'epiz_32287077_akida';
$user_name = 'epiz_32287077';
$user_password = 'd7MbRiA7OC7';
$_SERVER = 'sql305.epizy.com';


$conn = new PDO($db_name, $user_name, $user_password);
if($conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>