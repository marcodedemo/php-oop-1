<?php



require_once './Models/Movie.php';


$movies = [

    new Movie("Abigail",110,"Aleksandr Boguslavskiy",["Tina Dalakishvilli", "Gleb Bochkov", "Eddie Marsan","Ravshana Kurkova"],["Azione", "Avventura", "Fantastico"], "Russia","Inglese",2019),

    new Movie("Eternals",156,"Kevin Feige", ["Gemma Chan", "Richard Madden"],["Azione", "Fantascienza", "Avventura"], "USA", "Inglese", 2021),

    new Movie("Confusi e Felici", 105, "Massimiliano Bruno", ["Claudio Bisio", "Marco Giallini", "Anna Foglietta"], ["Commedia"],"Italia", "Italiano", 2014 ),

    new Movie("Push", 111, "Paul McGuigan", ["Chris Evans", "Dakota Fanning", "Cliff Curtis"], ["Fantascienza", "Azione"], "USA", "Inglese", 2009),

    new Movie("Babylon", 189, "Damien Chazelle", ["Diego Calva", "Brad pitt", "Margot Robbie", "Eric Roberts"], ["Commedia", "Storico", "Drammatico"], "USA", "Inglese", 2022),


    
];