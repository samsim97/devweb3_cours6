<?php

    session_start();
    $nom_cookie = "clef_php";
    $valeur_cookie = "valeur";
    $expiration_temps_secondes = 3600;
    $path = "/";
    setcookie($nom_cookie, $valeur_cookie, time() + $expiration_temps_secondes, $path);

?>

<!DOCTYPE html>
<html lang="en">

    <script>

        function setCookie(nom_cookie, valeur_cookie, expiration_temps_secondes) {

            var date_temp = new Date();
            date_temp.setTime(date_temp.getTime() + expiration_temps_secondes);
            var date_expiration = "expires=" + date_temp.toUTCString();
            document.cookie = nom_cookie + "=" + valeur_cookie + ";" + date_expiration + ";path=/";

        }
        setCookie("clef", "Valeur", 3600);

    </script>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Example session</title>
    </head>
    <body>

        <h2>
            <?php
            
                if (isset($_SESSION["first_name"])) {

                    echo("Votre nom est " . $_SESSION["first_name"]);

                } else {

                    echo("On ne connait pas votre nom");

                }
            
            ?>
        </h2>

        <form action="/exemple_session.php" method="post">
            <label for="first_name">Prénom</label></br>
            <input type="text" id="first_name" name="first_name"></br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
