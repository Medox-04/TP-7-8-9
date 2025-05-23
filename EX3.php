<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<form action='EX3.php' method='post'>
<label>Nom</label><input type='text' name='nom' placeholder='Ex. OUBBAHAMMOU' ><br><br>
<label>Email</label><input type='text' name='email' placeholder='Ex. user@gmail.com' ><br><br>
<label> Message</label> <br>   <textarea name="message" rows="4" cols="30" ></textarea><br><br>
<input type="submit" name="envoyer" value="Envoyer">
</form>

<?php
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo "<h3>Message reçu :</h3>";
        echo "<p><strong>Nom :</strong> $nom</p>";
        echo "<p><strong>Email :</strong> $email</p>";
        echo "<p><strong>Message :</strong>$message</p>";
    } else {
        echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
    }
}
?>
</body>
</html>
