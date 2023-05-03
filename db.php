<?php



require_once './Models/Movie.php';


$abigail = new Movie("Abigail",110,"Aleksandr Boguslavskiy",["Tina Dalakishvilli", "Gleb Bochkov", "Eddie Marsan","Ravshana Kurkova"],["Azione", "Avventura", "Fantastico"], "Russia","Inglese",2019);
    
$eternals =  new Movie("Eternals",156,"Kevin Feige", ["Gemma Chan", "Richard Madden"],["Azione", "Fantascienza", "Avventura"], "USA", "Inglese", 2021);

$confusiEFelici = new Movie("Confusi e Felici", 105, "Massimiliano Bruno", ["Claudio Bisio", "Marco Giallini", "Anna Foglietta"], ["Commedia"],"Italia", "Italiano", 2014 );
    
$movies = [

    $abigail, $eternals,$confusiEFelici
];