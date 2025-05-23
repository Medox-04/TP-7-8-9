<?php
$fichier='message.txt';
if ($_SERVER['REQUEST_METHOD']==='POST'){
$nom = $_POST['nom'];
$message = $_POST['msg'];
$date= date("Y-m-d H:i:s");
$ligne = "$nom : $message : $date" ;
file_put_contents(  $fichier, $ligne , FILE_APPEND);

}
if (file_exists($fichier)) {
    echo "<h3> message</h3> <PRE>";
   print_r( file_get_contents($fichier)."</PRE>");
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
    <form method ='post'>
<label for="nom">Nom</label><input type="text" name='nom'><br><br>    
<label for="message">Votre Message</label><input type='text' name='msg'>
<input type='submit'value='enregistrer'>



    </form>
</body>
</html>