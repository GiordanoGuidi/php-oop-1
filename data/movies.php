<?php 
require_once __DIR__ . '/../models/Director.php';
require_once __DIR__ . '/../models/Actor.php';
require_once __DIR__ . '/../models/Movie.php';



//# Istanze classe Movie
$movie1 = new Movie('Joker','Action','140 min',$director1,$actors);
echo $movie1->actors[0]->firstName;
$movie2 = new Movie('Top Gun','Action','120 min',$director2,$actors);