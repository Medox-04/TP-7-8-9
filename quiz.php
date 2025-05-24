<!DOCTYPE html>
<html>
<head>
    <title> QUIZ</title>
</head>
<body>
    <h2>Mini Quiz</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;
        $reponses = [
            "1" => "a",
            "2" => "b",
            "3" => "c",
            "4" => "d",
        ];

        foreach ($reponses as $question => $bonnereponse) {
            if (isset($_POST[$question])) {
                if ($_POST[$question] == $bonnereponse) {
                    $score++;
                    echo "<p>" .$question . " Bonne réponse</p>";
                } else {
                    echo "<p>".$question . " Mauvaise réponse</p>";
                }
            } else {
                echo "<p>".$question." Aucune réponse</p>";
            }
        }

        echo "<h3>Score final : $score / " . count($reponses) . "</h3>";
    } else {
    ?>

    <form method="post" action="quiz.php">
        <p>1. Quelle est la capitale premier du maroc  ?</p>
        <input type="radio" name="1" value="a"> walili <br>
        <input type="radio" name="1" value="b"> rabat<br>
        <input type="radio" name="1" value="c"> fes <br>
        <input type="radio" name="1" value="d"> marakech<br>


        <p>2. Combien font 5+10-3 ?</p>
        <input type="radio" name="2" value="a"> 4<br>
        <input type="radio" name="2" value="b">12<br>
        <input type="radio" name="2" value="c"> 22<br>
        <input type="radio" name="2" value="d"> 1 <br>

        <p>3. Quelle est la couleur dominante dans la ville zenata ?</p>
        <input type="radio" name="3" value="a"> Violet<br>
        <input type="radio" name="3" value="b"> Rouge<br>
        <input type="radio" name="3" value="c"> Vert<br>
        <input type="radio" name="3" value="d"> bleu <br>

        <p>4. Quelle est le meilleur joueur en histoire ?</p>
        <input type="radio" name="4" value="a"> maradona<br>
        <input type="radio" name="4" value="b"> lamine<br>
        <input type="radio" name="4" value="c"> cr7<br>
        <input type="radio" name="4" value="d"> messi<br>

       
        <input type="submit" value="Envoyer">
    </form>

    <?php } ?>
</body>
</html>