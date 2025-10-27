<?php

$con = new mysqli("localhost", "root", "", "crud");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = 'INSERT INTO `users` (`id`, `name`, `lastname`, `avatar`)
    VALUES (NULL, "'.$_POST['name'].'", "'.$_POST['lastname'].'", "'.$_POST['avatar'].'");';


echo $sql;

echo $_POST['name'];
echo $_POST['lastname'];
echo $_POST['avatar'];

$con->query($sql);
?>