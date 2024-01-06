<?php
    function afficherTableau($donnees) {
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
        echo "<tr><td>{$donnees['nom']}</td><td>{$donnees['prenom']}</td><td>{$donnees['adresse']}</td><td>{$donnees['ville']}</td><td>{$donnees['code_postal']}</td></tr>";
        echo "</table>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $adresse = htmlspecialchars($_POST["adresse"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $code_postal = htmlspecialchars($_POST["code_postal"]);
        afficherTableau([
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'ville' => $ville,
            'code_postal' => $code_postal
        ]);
    } else {
        echo "<p>Aucune donnée n'est enregistree.</p>";
    }
    ?>