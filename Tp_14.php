<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice15</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
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
    <h1>Exercice15: Transformation des chaînes de caractères</h1>
    <form method="post">
        <label for="inputString">Entrer la chaine de caractere</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Transformer</button>
    </form>

    <?php
    function Maj_Min(&$tab_Chaine) {
        foreach ($tab_Chaine as &$chaine) {
            $chaine = ucfirst(strtolower($chaine));
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chaine = $_POST["inputString"];
        $mesChaines = array($chaine);
        Maj_Min($mesChaines);
    }
    ?>
    <?php if (isset($mesChaines)): ?>
        <table>
            <thead>
                <tr>
                    <th>Chaine </th>
                    <th>Resultat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $chaine; ?></td>
                    <td><?php echo implode(", ", $mesChaines); ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
