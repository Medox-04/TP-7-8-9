<?php
session_start();
    if(isset($_POST['identifiant']) && isset($_POST['motdepasse'])){
        if($_POST['identifiant']=='12345'&& $_POST['motdepasse']== 'mohamed oubb'){
            $_SESSION['user'] = $_POST['identifiant'];
            header('location: login.php');
            exit();
        }
        else{
            echo"reesayez";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Page de connexion </h1>
    <form action='EX4.php' method='post'>
<label>ID</label><input type='text' name='identifiant'> <br><br>
<label>Password</label><input type='text' name='motdepasse'><br><br>
<input type='submit' value='connecter' name='envoyer'>
    </form>
   
</body>
</html>