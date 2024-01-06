<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice13</title>
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
    <script>
        function calculerTVA() {
            var prixHT = parseFloat(document.getElementById('prixHT').value);
            var tauxTVA = parseFloat(document.getElementById('tauxTVA').value);

            if (isNaN(prixHT) || isNaN(tauxTVA)) {
                alert('Veuillez saisir des valeurs numériques valides.');
                return;
            }

            var montantTVA = prixHT * (tauxTVA / 100);
            var prixTTC = prixHT + montantTVA;

            document.getElementById('montantTVA').value = montantTVA.toFixed(2);
            document.getElementById('prixTTC').value = prixTTC.toFixed(2);
        }
    </script>
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
    <h1>Exercice13: Calcul du TVA</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prixHT = isset($_POST['prixHT']) ? floatval($_POST['prixHT']) : 0;
        $tauxTVA = isset($_POST['tauxTVA']) ? floatval($_POST['tauxTVA']) : 0;
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    }
    ?>
    <form method="post" action="">
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo isset($prixHT) ? $prixHT : ''; ?>" required>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo isset($tauxTVA) ? $tauxTVA : ''; ?>" required>
        <br><br>
        <button type="button" onclick="calculerTVA()">Calculer</button>
        <br><br>
        <label for="montantTVA">Montant TVA :</label>
        <input type="text" id="montantTVA" name="montantTVA" value="<?php echo isset($montantTVA) ? number_format($montantTVA, 2) : ''; ?>" readonly>

        <label for="prixTTC">Prix TTC :</label>
        <input type="text" id="prixTTC" name="prixTTC" value="<?php echo isset($prixTTC) ? number_format($prixTTC, 2) : ''; ?>" readonly>
        
    </form>
</body>
</html>