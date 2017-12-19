<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        $gender = 'homme';
        $age = 18;

        function string($gender, $age) {
            if (($gender == 'homme')  && ($age >= 18)) {
                $message = 'Tu es un ' . $gender. ' et tu es majeur.';
            }
            elseif (($gender == 'femme')  && ($age >= 18)) {
                $message = 'Tu es une ' . $gender. ' et tu es majeure.';
            }
            elseif (($gender == 'homme')  && (($age < 18) && ($age >= 0))) {
                $message = 'Tu es un ' . $gender. ' et tu es mineur.';
            }
            elseif (($gender == 'femme')  && (($age < 18) && ($age >= 0))) {
                $message = 'Tu es une ' . $gender. ' et tu es mineure.';
            }
           return $message;
        }

        echo string($gender, $age);
        ?>
    </body>
</html>
