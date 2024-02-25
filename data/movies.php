<?php 
require_once __DIR__ . '/../models/Director.php';
require_once __DIR__ . '/../models/Actor.php';
require_once __DIR__ . '/../models/Movie.php';



//# Array di istanze movie

$movies = [
    new Movie('Joker','Action','140 min',$director1,$actors),
    new Movie('Top Gun','Action','120 min',$director2,$actors),
];