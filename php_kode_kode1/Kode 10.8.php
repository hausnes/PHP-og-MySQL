<?php
// velger et vilkårlig heltall fra 0 til 10
$tall = rand(0,10);

// så lenge tallet er mindre enn eller lik 10
while($tall <= 10) {
    // skriver ut tallet
    echo "$tall ";
    // øker tallets verdi med 1
    $tall = $tall + 1;
}
?>