<?php session_start(); ?>
<?php

//zet alle letters in de gebruikersnaam om in kleine letters
$naam = strtolower($_POST['username']);
$wachtwoord = $_POST['wachtwoord'];

//array maken waar alle gebruikers in zitten. Alleen kleine letters gebruiken in namen
$gebruikers = array(
    'admin' => 'admin',
);

//kijk of de gebruiker bestaat, zoja:
if(isset($gebruikers[$naam]))
    {
         //als het wachtwoord gelijk is aan wat er in de variabele zit:
        if($wachtwoord == $gebruikers[$naam])
            {
                //zet variabele zo dat het script het herkent als ingelogd
                $_SESSION['login'] = "1";
                
                //zet naam in variabele, zodat het later nog gebruikt kan worden
                $_SESSION['login-naam'] = $naam;
                
                //laat de beveiligde pagina zien
                include ("beveiligdepagina.php");
            }
        //als het wachtwoord niet klopt:
        else
            {
                echo 'Wachtwoord is onjuist. Probeer het nog eens. Als je je wachtwoord vergeten bent, stuur dan een mailtje naar de beheerder.';
            }
    }
//als de gebruikersnaam niet bekend is:
else
    {
        echo 'De ingevoerde gebruikersnaam is niet bij ons bekend.';
    }

?>