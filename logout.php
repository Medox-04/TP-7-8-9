<?php
session_start();
session_destroy();
header('Location: EX4.php');
exit();
?>