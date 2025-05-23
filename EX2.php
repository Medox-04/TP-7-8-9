<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX02</title>
</head>
<body>
    <form action='EX2.php' method='post' >
<label>Entrez la longeur de votre mot de passe </label><input name='titre' type='number'>
<input type='submit' name='click' value='generer'>
</body>
<?php 
if(isset($_POST['click'])){
$longeur=$_POST['titre'];
$caractere='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
$mot='';

for($i=0 ; $i< $longeur ; $i++){
    $mot .= $caractere[rand(0,strlen($caractere)-1)];

}
echo 'mot de passe est' .$mot;
}

?>
</form>
</html>