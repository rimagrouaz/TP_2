<!DOCTYPE html>
<html>
<head>
    <title>Equation second degré</title>
</head>
<body>
    <h5 style="margin-left: 38%;">Résolution de l'équation de 2nd degré</h5>
    <form style="margin-left: 38%;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="a"></label>
        <input type="text" name="a" placeholder="Entrer la valeur de a">
        <br>
        <br>
        <label for="b"></label>
        <input type="text" name="b" placeholder="Entrer la valeur de b">
        <br>
        <br>
        <label for="c"></label>
        <input type="text" name="c" placeholder="Entrer la valeur de c">
        <br>
        <br>
        <input type="submit"  value="Entrer" >
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["a"]) && !empty($_POST["b"]) && !empty($_POST["c"])) {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            $delta = pow($b, 2) - (4 * $a * $c);

            if ($delta < 0) {
                echo "Impossible de résoudre cette équation";
            } else if ($delta > 0) {
                $res1 = (-$b + sqrt($delta)) / (2 * $a);
                $res2 = (-$b - sqrt($delta)) / (2 * $a);
                echo "L'équation admet deux résultats : x1 = $res1 et x2 = $res2";
            } else {
                $resultat = -$b / (2 * $a);
                echo "L'équation admet un résultat unique : x = $resultat";
            }
        } else {
            echo "Veuillez remplir tous les champs.";
        }
    }
    ?>
</body>
</html>
