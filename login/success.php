<?php
session_start();

$users_db = parse_ini_file("../db/users.php", true);

$user = $_POST["user"];
$pass = $_POST["pass"];

$admin_user = $users_db['admin_user_1']['username'];
$admin_password = $users_db['admin_user_1']['password'];

if ( $user == $admin_user && $pass==$admin_password )
{
  $_SESSION['myuser'] = "admin";
  header("Location: ../index.php");
}
else
{
  header("Location: index.php");
}
?>
