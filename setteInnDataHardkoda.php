<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sette inn data i DB</title>
    </head>
    <body>
        <h1>Test av å sette inn data i MySQL</h1>
        
        <!-- ALTERNATIV 1, hardkoda verdiar rett i PHP-koden. -->
        <?php
            // Tilkoblingsinformasjon
            $tjener = "localhost";
            $brukernavn = "root";
            $passord = "";
            $database = "standardeksempel";

            $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
            if ($kobling->connect_error) {
                die("Noko gjekk gale: " + $kobling->connect_error);
            }
            else {
                echo "<p>Koblingen fungerer.</p>";
            }

            $kobling->set_charset("utf8");

            // Sjølve innsettinga
            // Alternativ 1: Hardkoda
            $sql = "INSERT INTO postadresse (postnr, poststed) VALUES ('2345', 'Cowabunga!');";

            // Testar om spørringa køyrte
            if($kobling->query($sql)) {
                echo "<p>Spørringa $sql blei gjennomført.</p>";
            }
            else {
                echo "<p>Noko gjekk gale med spørringa $sql ($kobling->error).</p>";
            }
        ?>
    </body>
</html>