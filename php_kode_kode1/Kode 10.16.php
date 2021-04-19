<?php
// Sjekker om knappen er trykket.
// I så fall har vi fått informasjon
// fra skjemaet.

if(isset($_GET["sendinn"])) {
    // Lagrer skjemafeltene i enklere variabler
    $navn = $_GET["dittnavn"];
    $film = $_GET["favorittfilm"];

    echo "<p>Du heter $navn, og din favorittfilm er $film.</p>";		
}
?>