<?php
// Definerer arrayen $figurer
$figurer = array("Langbein", "Asterix", "Skrue McDuck");

// Skriver ut figurene med en løkke	
echo "<h3>Noen tegneseriefigurer</h3>";
for($i=0; $i < count($figurer); $i++) {
    echo "Figur med indeks $i: $figurer[$i] <br>";
}
	
// Bruker apostrofer for å vise arrayens navn
echo '<h3>Arrayen $figurer</h3>';
// Bruker var_dump for å vise alt innhold
var_dump($figurer);
?>