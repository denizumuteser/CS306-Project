<?php

$db = mysqli_connect('localhost','root','','redaus');

if($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$db->query("SET NAMES 'utf8'");
?>