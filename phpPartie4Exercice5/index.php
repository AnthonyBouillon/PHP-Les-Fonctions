<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 5</title>
    </head>
    <body>
        <?php
        $number = 63;
        $text = 'Ceci n\'est pas une révolution.';

        function concatString($number, $text) {
            return $number . $text;
        };
        echo concatString($number, $text);
        ?>
    </body>
</html>
