<?php
// Definerer arrayen $art
$art = array("Langbein"=>"Hund", "Asterix"=>"Menneske", "Skrue McDuck"=>"And");

// Skriver ut arten Langbein tilhører	
echo "<p>Langbein er en " . $art["Langbein"] . ".</p>";

// Bruker apostrofer for å vise arrayens navn
echo '<h3>Arrayen $art</h3>';
// Bruker var_dump for å vise alt innhold
var_dump($art);
?>