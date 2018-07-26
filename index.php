<?php

// Exercice 1

echo $_GET["lastname"]." ".$_GET["firstname"];

// Exercice 2
echo "<br><br>";
if (isset($_GET["age"])){
    echo $_GET["age"];
} else {
    echo "Renseigner votrte âge.";
}
echo "<br><br>";

// Exercice 3

if (isset($_GET["startDate"]) AND isset($_GET["endDate"])){
    echo $_GET["startDate"]."  ".$_GET["endDate"] ;
} else {
    echo "";
}
echo "<br><br>";

// Exercice 4


if (isset($_GET["language"]) AND isset($_GET["server"])){
    echo $_GET["language"]."  ".$_GET["server"] ;
} else {
    echo "";
}
echo "<br><br>";

// Exercice 5

if (isset($_GET["week"])){
    echo $_GET["week"];
} else {
    echo "";
}
echo "<br><br>";

// Exercice 6

if (isset($_GET["building"]) AND isset($_GET["room"])){
    echo $_GET["building"]."  ".$_GET["room"] ;
} else {
    echo "";
}