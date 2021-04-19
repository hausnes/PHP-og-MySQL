<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sette inn data i DB frå skjema</title>
    </head>
    <body>
        <h1>Test av å sette inn data i MySQL vha skjema</h1>

        <!-- HTML-kode for eit skjema -->
        <form method="POST"> <!-- NB: POST, i motsetning til til dømes GET, altså verbet å "poste" -->
            Postnummer:
            <input type="number" name="postnr">
            Poststed:
            <input type="text" name="poststed">

            <input type="submit" name="leggTil" value="Legg til">
        </form>

        <!-- ALTERNATIV 2, sette inn data frå skjema. -->
        <?php
            if(isset($_POST["leggTil"])) {
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

                // Alternativ 2: Hente frå input-felt (NB: Sjå koden for skjemaet over PHP-en)
                $postnr = $_POST["postnr"];
                $poststed = $_POST["poststed"];

                $sql = "INSERT INTO postadresse (postnr, poststed) VALUES ('$postnr', '$poststed')";

                // Testar om spørringa køyrte
                if($kobling->query($sql)) {
                    echo "<p>Spørringa $sql blei gjennomført.</p>";
                }
                else {
                    echo "<p>Noko gjekk gale med spørringa $sql ($kobling->error).</p>";
                }
            }
        ?>
    </body>
</html>