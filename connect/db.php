<?php
$user = 'u47493';
$pass = '5835841';
$db = new PDO('mysql:host=localhost;dbname=u47493', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>