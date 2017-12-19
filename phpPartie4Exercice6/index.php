<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        $nom = 'DEFRETIN ';
        $prenom = 'Maxime ';
        $age = 24;

        function concatString($nom, $prenom, $age) {
            return 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . ' ans.';
        }

        echo concatString($nom, $prenom, $age);
        ?>
    </body>
</html>
