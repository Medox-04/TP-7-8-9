<?php
session_start();
if(!isset($_SESSION['user'])){
header('location: EX4.php');
}
echo 'bienvenu'.$_SESSION['user'];
echo'<a href="logout.php"> se deconnecter </a>';
?>
