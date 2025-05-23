<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">]
       
        <labe> X </labe><input type="number" name="X" placeholder="Entrez la valeur de X"><BR></BR>
        <select name="titre">
            <option> + </option><option> / </option><option>*</option><option>-</option>
        </select><BR></BR>
        <labe> Y </labe><input type="number" name="Y" placeholder="Entrez la valeur de Y">
<input type='submit' name= 'click' value ='calculer'>
    </form>

    <?php
    if(isset($_POST['click'])){
        $x= strip_tags($_POST['X'] ?? '');
        $y= strip_tags($_POST['Y'] ?? '');
        $operation = $_POST['titre'];
        $resultat=0 ;
        switch($operation){
            case '+' : $resultat= $x + $y ; break;
            case '-' : $resultat= $x - $y ; break;
            case '*' : $resultat= $x * $y ; break;
            case '/' : $resultat = ($y != 0) ? ($x / $y) : 'Division impossible !'; break;
            default: $resultat= 'error';
        
        }
        echo 'le resultat est :' .$resultat;
      
        
    }
    
    ?>
</body>
</html>