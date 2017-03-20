<!doctype html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch</title>
</head>
<h1>Switch! Kies tussen Cola, Bier of Water!</h1>
<form method="POST" action="index.php">
    <input type="text" name="beverage"> <br/>
    <input type="submit" name="submit" value="go!">

</form>
    
</html>
<?php
/**
 * Created by PhpStorm.
 * User: cemde
 * Date: 27-2-2017
 * Time: 09:59
 */

$beverage = $_POST['beverage'];

switch ($beverage) {

    case 'cola':
        echo '<h2 class="cola">Het drinken dat je hebt gekozen is Cola!</h2>';
        echo '<img src="img1.png" class="img3">';
        break;
    case 'Cola':
        echo '<h2 class="cola">Het drinken dat je hebt gekozen is Cola!</h2>';
        echo '<img src="img1.png" class="img3">';
        break;
    case 'bier':
        echo '<h2 class="bier">Lekker een biertje! Maar NIX18 is de afspraak!</h2>';
        echo '<img src="img2.png" class="img">';
        break;
    case 'Bier':
        echo '<h2 class="bier">Lekker een biertje! Maar NIX18 is de afspraak!</h2>';
        echo '<img src="img2.png" class="img">';
        break;
    case 'Water':
        echo '<h2 class="water">Verfrissend water!</h2>';
        echo '<img src="img3.png" class="img">';
        break;
    case 'water':
        echo '<h2 class="water">Verfrissend water!</h2>';
        echo '<img src="img3.png" class="img">';
        break;
    default:
        echo '<h2 class="default">Ik weet niet wat u bedoeld? </h2> '; 
        echo '<img src="vraagteken.png" class="img2">';

}
?>