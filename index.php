<?php
$vite = "Allons vite";
echo $vite;

$tableau = ["poids", "mesure", "chaine", "vitre"];
echo $tableau[1];
for($i = 0; $i < 4; $i++) {
    echo "$tableau[$i] <br>";
}
?>

<ul>

</ul>

<?php
foreach($tableau as $mot) {
    echo "$mot <br>";
}