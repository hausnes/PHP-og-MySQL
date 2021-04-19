<?php
// Funksjonen rand(min,maks) gir oss et tilfeldig
// heltall fra 1 til 6 (som en terning)
$terningkast = rand(1,6);

echo "Du fikk $terningkast på terningen. <br>";

echo "Det er ";

if($terningkast == 1) {
    echo "ikke bra nok...";
} else if($terningkast == 6) {
    echo "glimrende!";
} else {
    echo "ikke noe å skryte av...";
}
?>