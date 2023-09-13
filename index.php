<?php


//opdracht 1
session_start();


    if(isset($_SESSION['count'])) {
        $_SESSION['count']++;
    }
    else {
        $_SESSION['count'] = 0;
    }
   echo "Deze pagina heb je al:" .$_SESSION['count'] ." keer bekeken";
    echo "<br>";




//Opdracht 2

function trackTotalViews() {
    if(isset($_COOKIE['total_views'])) {
        $totalViews = intval($_COOKIE['total_views']);
    } else {
        $totalViews = 0;
    }
    $totalViews++;
    setcookie('total_views', $totalViews, time() + 3600 * 24 * 30);
    return $totalViews;
}

function trackSessionViews() {
    if (!isset($_SESSION['session_views'])) {
        $_SESSION['session_views'] = 0;
    }

    $_SESSION['session_views']++;
    return $_SESSION['session_views'];
}

$totalViews =  trackTotalViews();
$sessionViews = trackSessionViews();


echo "Aantal weergaven in deze sessie voordat de internet browser is afgesloten: {$sessionViews}";

echo "<br>";

echo "Totaal weergaven in deze sessie: {$totalViews}";



//opdracht 3
function generatePostcode() {
    $postcode = rand(1000, 9999);
    $letters = ['AA', 'AB', 'AX', 'TW', 'GS', 'EN'];

    $randomLetters = $letters[array_rand($letters)];
    return $postcode . '' . $randomLetters;


}

$randomPostcode = generatePostcode();
echo "<br>";
echo"De postoode is  {$randomPostcode}";



//opdracht 4
function berekenOmtrek($straal) {
    $pi = 3.14159;
    $omtrek = 2 * $pi * $straal;
    return round($omtrek, 1);
}

function berekenOppervlakte($straal) {
    $pi = 3.14159;
    $oppervlakte = $pi * pow($straal, 2);
    return round($oppervlakte, 1);
}

$straal = 5.0;
$omtrek = berekenOmtrek($straal);
$oppervlakte = berekenOppervlakte($straal);


echo "<br>";
echo "De omtrek van een cirkel met straal 5 is: {$omtrek}";
echo "<br>";
echo "De oppervlakte van een cirkel met straal 5 is: {$oppervlakte}";










?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huiswerk</title>
</head>
<body>

</body>
</html>
