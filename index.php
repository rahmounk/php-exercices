<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo PHP</title>
</head>
<body>
    <h1>Exercices PHP</h1>
    <!-- --- -->
    <h2>Pythagore</h2>
    <form action="index.php" method="post">
        <label for="value_b">Valeur de b (en cm):</label>
        <input type="number" name="value_b"><br>
        <br>
        <label for="value_c">Valeur de c (en cm):</label>
        <input type="number" name="value_c"><br>
        <br>
        <button>Calculer</button><br>
        <br>
    </form>
    <?php
    if (isset($_POST["value_b"]) && ($_POST["value_c"])) {
        $b = $_POST["value_b"];
        $c = $_POST["value_c"];
        $a = ($c * $c + $b * $b) / $a;
        echo 'Si la longueur de b est de ' . $b . ' cm.<br>';
        echo 'Si la longueur de c est de ' . $c . ' cm.<br>';
        echo 'Alors la longueur de l\'hypothenuse est de ' . $a . ' cm.<br>';
    } else {
        echo 'Aucune valeur entrée';
    };
    ?>


    <!-- --- -->
    <h2>Sinus et cosinus</h2>
    <form action="index.php" method="post">
        <label for="value_angle">Valeur de l'angle :</label>
        <input type="number" name="value_angle"><br>
        <br>
        <button>Calculer</button><br>
        <br>
    </form>
    <?php
    if (isset($_POST["value_angle"])) {
        $x = (cos($_POST["value_angle"]));
        $y = (sin($_POST["value_angle"]));
        echo 'La position de P est de ' . $x . ' cm en x et de ' . $y . ' cm.<br>';
    } else {
        echo 'Aucune valeur entrée';
    };
    ?>


    <!-- --- -->
    <h2>Boucle for{...}</h2>
    <?php
    for ($i = 0; $i <= 24; $i++) {
        echo 'la valeur est de ' . $i . '.<br>';
    }
    ?>


    <!-- --- exercice -->
    <h2>Boucle for{...}</h2>
    <?php
    for ($i2 = 25; $i2 >= 1; $i2--) {
        echo 'la valeur est de ' . $i2 . '.<br>';
    }
    ?>


    <!-- --- -->
    <h2>Boucle for{...}</h2>
    <?php
    for ($i3 = 1; $i3 <= 25; $i3++) {
        for ($i4 = 1; $i4 <= $i3; $i4++) {
            echo '' . $i4 . ' ';
        }
        echo '<br>';
    }
    ?>

    
    <!-- --- -->
    <h2>Somme multiple</h2>
    <?php
    $total = 0;
    for ($i5 = 1; $i5 <= 30; $i5++) {
        $total = $i5 + $total;
    }
    echo 'La somme multiple est ' . $total . '.<br>'
    ?>


    <!-- --- -->
    <h2 id="entier">Entier pair ?</h2>
    <form action="index.php" method="post">
        <label for="value_number">Nombre à vérifier :</label>
        <input type="number" name="value_number"><br>
        <br>
        <button>Verifier</button><br>
        <br>
    </form>
    <?php
    function estPair($ma_variable)
    {
        if ($ma_variable % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }
    if (isset($_POST['value_number'])) {
        if (estPair($_POST['value_number'])) {
            echo 'c\'est pair';
        } else {
            echo 'c\'est pas pair';
        }
    }
    ?>


    <!-- --- -->
    <h2>Somme des entiers pairs</h2>
    <?php
    $total2 = 0;
    for ($i6 = 1; $i6 <= 30; $i6++) {
        if (estPair($i6)) {
            $total2 = $i6 + $total2;
        }
    };
    echo 'La somme des entiers pairs est de : ' . $total2
    ?>
    <!-- --- -->
    <h2>Factorielle (n!)</h2>
    <form action="index.php" method="post">
        <label for="value_number2">Nombre à factoriser :</label>
        <input type="number" name="value_number2"><br>
        <br>
        <button>Factoriser</button><br>
        <br>
    </form>
    <?php;
    if (isset($_POST["value_number2"])) {
        $fact1 = gmp_fact($_POST["value_number2"]);
        echo 'La factorielle du nombre est : ' . $fact1;
    }
    ?>


    <!-- --- -->
    <h2>Échange de valeurs</h2>
    <form action="index.php" method="post">
        <label for="value_number3">Valeur de a :</label>
        <input type="number" name="value_number3"><br>
        <br>
        <label for="value_number4">Valeur de b :</label>
        <input type="number" name="value_number4"><br>
        <br>
        <button>Envoyer</button><br>
        <br>
    </form>
    <?php
    if (isset($_POST["value_number3"]) && ($_POST["value_number4"])) {
        $a = $_POST["value_number3"];
        $b = $_POST["value_number4"];
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
        echo 'Valeur de a : ' . $a . '<br>';
        echo 'Valeur de b : ' . $b;
    }
    ?>


    <!-- --- -->
    <h2>Conversion heures:minutes:secondes</h2>
    <form action="index.php" method="post">
        <label for="value_secondes">Valeur en secondes :</label>
        <input type="number" name="value_secondes"><br>
        <br>
        <button>Convertir</button><br>
        <br>
    </form>
    <?php
    function ConvertisseurTime($Time)
    {
        if ($Time < 3600) {
            $heures = 0;
            if ($Time < 60) {
                $minutes = 0;
            } else {
                $minutes = round($Time / 60);
            }
            $secondes = floor($Time % 60);
        } else {
            $heures = round($Time / 3600);
            $secondes = round($Time % 3600);
            $minutes = floor($secondes / 60);
        }
        $secondes2 = round($secondes % 60);
        $TimeFinal = "$heures h $minutes min $secondes2 s";
        return $TimeFinal;
    }
    if (isset($_POST["value_secondes"])) {
        echo ConvertisseurTime($_POST["value_secondes"]);
    }
    ?>


    <!-- --- -->
    <h2>Affichage des éléments d'un tableau</h2>
    <form action="index.php" method="post">
        <label for="value_letter">Nombre de lettre :</label>
        <input type="number" name="value_letter"><br>
        <br>
        <button>Chercher</button><br>
        <br>
    </form>
    <?php
    $heros = ["Julien", "Corentin", "Karim", "Titouan", "Charlotte", "Houria", "Anthony", "Jose", "Thomas", "Sébastien"];
    foreach ($heros as $hero) {
        if (isset($_POST["value_letter"])) {
            if (strlen($hero) == $_POST["value_letter"]) {
                echo $hero . '<br>';
            }
        }
    }
    ?>


    <!-- --- -->
    <h2>Recherche de la plus petite valeur dans un tableau d'entiers</h2>
    <?php
    $numbersTab = [259, 24, 5874, 6, 5, 98];
    echo 'La plus petite valeur est : ' . min($numbersTab) . '<br>';
    ?>

    
    <!-- --- -->
    <h2>Tri d'un tableau d'entiers</h2>
    <?php
    $numbersTab2 = [259, 24, 5874, 6, 5, 98];
    sort($numbersTab2);
    print_r($numbersTab2);
    ?>
    <!-- --- -->
    <h2>Jeu : nombre mystère</h2>


    <!-- --- -->
    <h2>Exo 17</h2>
    <form action="index.php" method="post">
        <label for="value_heure">Heure :</label>
        <input type="number" name="value_heure"><br>
        <br>
        <button>Chercher</button><br>
        <br>
    </form>
    <?php
    if (isset($_POST["value_heure"])) {
        $heure = $_POST["value_heure"];
        if ($heure > 6 and $heure < 12) {
            echo 'c\est le matin';
        } elseif ($heure > 12 and $heure < 21) {
            echo 'c\'est l\'après midi';
        } else {
            echo 'c\'est la nuit';
        }
    }
    ?>

    
    <!-- --- -->
    <h2>Exo 18</h2>
    <?php
    for ($i7 = 1; $i7 <= 100; $i7++) {
        if ($i7 % 3 == 0 and $i7 % 5 == 0) {
            echo 'foobar<br>';
        } elseif ($i7 % 3 == 0) {
            echo 'foo<br>';
        } elseif ($i7 % 5 == 0) {
            echo 'bar<br>';
        } else {
            echo $i7 . '<br>';
        }
    }
    ?>
</body>


</html>