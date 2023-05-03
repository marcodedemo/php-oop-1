

<?php 

require_once './Models/Movie.php';
require_once './db.php';



?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
 
<body>

    <div class="container pt-4">

        <table class="table text-center">

            <thead>
                <th>Titolo</th>
                <th>Lunghezza</th>
                <th>Regia</th>
                <th>Cast</th>
                <th>Genere</th>
                <th>Nazionalità</th>
                <th>Lingua Originale</th>
                <th>Anno di Produzione</th>

            </thead>

            <tbody>

                <?php

                foreach($movies as $singleMovie){  
                ?>

                <tr>
                    <td><?= $singleMovie->title ?></td>
                    <td><?= $singleMovie->getLengthString() ?></td>
                    <td><?= $singleMovie->director ?></td>
                    <td><?= implode(", ", $singleMovie->cast) ?></td>
                    <td><?= implode(", ", $singleMovie->category) ?></td>
                    <td><?= $singleMovie->nationality ?></td>
                    <td><?= $singleMovie->language ?></td>
                    <td><?= $singleMovie->productionYear ?></td>

                </tr>

                <?php
                }

                ?>

            </tbody>
    
        </table>
        
    </div>
    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>