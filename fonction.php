<?php
// function anisogoma($nom)
// {
//     return "Anisogoma " . $nom . "!";
// }
// echo anisogoma("Moussa");
// echo "<br/>";
// function surface_carre($cote = 5)
// {
//     return $cote * $cote;
// }
// echo surface_carre();
// echo "<br/>";
// echo surface_carre(10);


function table_multiplication($n)
{
    for ($i = 1; $i <= 10; $i++) {
        echo $n . " X " . $i . " = " . ($n * $i) . "<br/>";
    }
}
table_multiplication(5);
