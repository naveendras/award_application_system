<?php

$user = 'root';
$pass = '';
$db = 'award_2017';

$conn = mysqli_connect('localhost',$user,$pass) or die('Site is down for upgrade, Please try in few minutes');
mysqli_select_db($conn, $db) or die(mysqli_error($conn));

?>