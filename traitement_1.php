<?php
    if (isset($_POST['action'])) {
        $choix = $_POST['action'];

        switch ($choix) {
            case 'Vendre':
                header('Location: vendre.php');
                break;
            case 'Acheter':
                header('Location: acheter.php');
                break;
            case 'Louer':
                header('Location: louer.php');
                break;
                break;
        }
    } 
    ?>