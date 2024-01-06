<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        li {
            float: left;
        }

        a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="Tp.php">Exercice 1</a></li>
        <li><a href="Tp_1.php">Exercice 2</a></li>
        <li><a href="Tp_2.php">Exercice 3(while)</a></li>
        <li><a href="Tp_2.1.php">Exercice 3(for)</a></li>
        <li><a href="Tp_3.php">Exercice 4</a></li>
        <li><a href="Tp_4.php">Exercice 5</a></li>
        <li><a href="Tp_5.php">Exercice 6</a></li>
        <li><a href="Tp_6.php">Exercice 7</a></li>
        <li><a href="Tp_7.php">Exercice 8</a></li>
        <li><a href="Tp_8.php">Exercice 9</a></li>
        <li><a href="Tp_9.php">Exercice 10(exo9)</a></li>
        <li><a href="Tp_9.1.php">Exercice 10(exo8)</a></li>
        <li><a href="Tp_10.php">Exercice 11(exo8)</a></li>
        <li><a href="Tp_10.1.php">Exercice 11(exo9)</a></li>
        <li><a href="Tp_11.html">Exercice 12</a></li>
        <li><a href="Tp_12.php">Exercice 13</a></li>
        <li><a href="Tp_13.php">Exercice 14</a></li>
        <li><a href="Tp_14.php">Exercice 15</a></li>
        <li><a href="Tp_15.php">Exercice 16</a></li>
        <li><a href="Tp_16.php">Exercice 17</a></li>
        <li><a href="Tp_17.php">Exercice 18</a></li>
    </ul>
    <h1>Exercice8: Tableau multidimentionnel associatif </h1>
    <?php
    $personnes = array(
        "BEYE" => array(
            "prenom" => "Amadou Mapathe",
            "ville" => "New York",
            "age" => 22
        ),
        "BALDE" => array(
            "prenom" => "Hadja Aissatou",
            "ville" => "Los Angeles",
            "age" => 20
        ),
        "SEYE" => array(
            "prenom" => "Seydina Limamoulaye",
            "ville" => "Marseille",
            "age" => 19
        ),
        "TOURE" => array(
            "prenom" => "Khady Suzanne",
            "ville" => "Paris",
            "age" => 25
        ),
    );

    echo "Informations sur BEYE :<br>";
    echo "Prenom : " . $personnes["BEYE"]["prenom"] . "<br>";
    echo "Ville : " . $personnes["BEYE"]["ville"] . "<br>";
    echo "Age : " . $personnes["BEYE"]["age"] . "<br><br>";

    echo "Informations sur BALDE :<br>";
    echo "Prenom : " . $personnes["BALDE"]["prenom"] . "<br>";
    echo "Ville : " . $personnes["BALDE"]["ville"] . "<br>";
    echo "Age : " . $personnes["BALDE"]["age"] . "<br><br>";

    echo "Informations sur SEYE :<br>";
    echo "Prenom : " . $personnes["SEYE"]["prenom"] . "<br>";
    echo "Ville : " . $personnes["SEYE"]["ville"] . "<br>";
    echo "Age : " . $personnes["SEYE"]["age"] . "<br><br>";

    echo "Informations sur TOURE :<br>";
    echo "Prenom : " . $personnes["TOURE"]["prenom"] . "<br>";
    echo "Ville : " . $personnes["TOURE"]["ville"] . "<br>";
    echo "Age : " . $personnes["TOURE"]["age"] . "<br>";
    ?>
</body>
</html>
