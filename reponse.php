<h1> Bonjour, <?php echo strip_tags($_POST['genre'])?> <?php echo strip_tags($_POST['prenom'])?> <?php echo strip_tags($_POST['nom'])?>  </h1>
<h2> votre identifiant est: <?php echo strip_tags($_POST['identifiant'])?> </h2>
<h2>votre mot de passe est: <?php echo strip_tags($_POST['psd'])?></h2>
<?php 
if(strip_tags($_POST['sex'])== 'M'){
     $mot = "debutant";}
else {
    $mot = "debutante";
} ?>
<h3> comme vous etes <?php echo $mot ?> c'est le temps de prendre php </h3>
<?php if(isset($_POST['date'])){ 
    $url= "https://fr.wikipedia.org/wiki/".strip_tags($_POST['date']);}?>
    <h3> voici les evenement principale dans mon annee de naissance <?php echo strip_tags($_POST['date']) ?></h3>
<iframe src="<?php echo $url ?>" frameborder="100" width='1300px' height='1500px' ></iframe>