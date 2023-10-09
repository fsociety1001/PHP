<?php
function checkAge($age)
{
    if ($age == 0) {
        echo 'Restringido';
    } elseif ($age > 0 && $age < 7) {
        echo "Infantil :/ ";
    } elseif ($age > 7 && $age < 17) {
        echo 'Adolescentizinho :/ ';
    } elseif ($age > 17 && $age < 49) {
        echo 'Adulto :O';
    } elseif ($age > 49 && $age < 99) {
        echo 'Idoso';
    } else {
        echo 'Monge Supremo ! ';
    }
}

checkAge(89);
?>
