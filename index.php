<?php
   require_once __DIR__ . '/database/db.php';

    //# Istanze Director
    //Istanza della classe DIRECTOR
    $director1 = new Director('Todd','Phillips', '57');
    $director2 = new Director('Tony', 'Scott', '68');

    //# Istanze classe ACTOR
   
    //Array degli attori
    $actors= [
        new Actor('Joaquin','Phoenix','49'),
        new Actor('Tom','Cruise','61'),
    ];


    //# Istanze classe Movie
    $movie1 = new Movie('Joker','Action','140 min',$director1,$actors);
    var_dump($movie1);
    echo $movie1->actors[0]->firstName;
    $movie2 = new Movie('Top Gun','Action','120 min',$director2,$actors);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    ?>
        
</body>
</html>