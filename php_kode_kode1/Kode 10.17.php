<!doctype html>
<html>
<head>
    <title> PHP og skjemaer </title>
    <meta charset="UTF-8">
</head>
<body>

<?php
if(isset($_GET["sendinn"])) {
    // Lagrer skjemafeltene i enklere variabler
    $navn = $_GET["dittnavn"];
    $film = $_GET["favorittfilm"];

    echo "<p>Du heter $navn, og din favorittfilm er $film.</p>";		
}
?>

<form method="GET">
    Ditt navn
    <input type="text" name="dittnavn">
    
    Hva er din favorittfilm?
    <input type="text" name="favorittfilm">
    
    <input type="submit" name="sendinn" value="Send inn">
</form>

</body>
</html>