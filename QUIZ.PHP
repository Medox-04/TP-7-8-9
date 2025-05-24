<!DOCTYPE html>
<html>
<head>
    <title>Mini Quiz</title>
</head>
<body>
    <h2>Mini Quiz</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;
        $reponses = [
            "Q1" => "a",
            "Q2" => "b",
            "Q3" => "c",
        ];

        foreach ($reponses as $question => $bonne_reponse) {
            if (isset($_POST[$question])) {
                if ($_POST[$question] == $bonne_reponse) {
                    $score++;
                    echo "<p>" .$question . " C'est une Bonne réponse</p>";
                } else {
                    echo "<p>".$question .  " C'est une Mauvaise réponse</p>";
                }
            } else {
                echo "<p>".$question." Aucune réponse</p>";
            }
        }

        echo "<h3>Score final : $score / " . count($reponses) . "</h3>";
    } else {
    ?>

    <form method="post" action="QUIZ.PHP">
        <p>1. Quelle est la capitale du Maroc ?</p>
        <input type="radio" name="Q1" value="a"> Rabat <br>
        <input type="radio" name="Q1" value="b"> Paris<br>
        <input type="radio" name="Q1" value="c"> london <br>

        <p>2. Combien font 2 + 2 en binaire ?</p>
        <input type="radio" name="Q2" value="a"> 4<br>
        <input type="radio" name="Q2" value="b">100<br>
        <input type="radio" name="Q2" value="c"> 22<br>

        <p>3. Quelle couleur obtient-on en mélangeant bleu et jaune ?</p>
        <input type="radio" name="Q3" value="a"> Violet<br>
        <input type="radio" name="Q3" value="b"> Rouge<br>
        <input type="radio" name="Q3" value="c"> Vert<br>

        <br>
        <input type="submit" value="Envoyer">
    </form>

    <?php } ?>
</body>
</html>
