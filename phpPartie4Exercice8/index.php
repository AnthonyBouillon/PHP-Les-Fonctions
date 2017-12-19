<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        function numbers($n1 = 0, $n2 = 1, $n3 = 2) {
            $result = $n1 + $n2 + $n3;
            return $result;
        }

        echo numbers(3, 2, 6);
        ?>
    </body>
</html>
