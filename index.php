<?php
//# Classi
//CLASSE MOVIE
class Movie
    {
        //variabili di istanza
        public $title;
        public $type;
        public $length;
        public $director;
        //Funzione
        public function introduce()
        {
            echo 'Ciao, sono' . ' ' . $this->title;
        }
        //Costruttore
        public function __construct($title, $type, $length, Director $director)
        {
            $this->title= $title;
            $this->type= $type;
            $this->length= $length;
            $this->director=$director;
        }

    }
//CLASSE DIRECTOR
class Director
    {
        public $name;

        //Costruttore
        public function __construct($name)
        {
            $this->name= $name;
        }

        public function saluta()
        {
            echo 'ciao sono'. ' ' .$name;
        }
    }
    //Istanza della classe DIRECTOR
    $director1 = new Director('Todd Phillips');
    $director2 = new Director('Tony Scott');
    // var_dump($director1,$director2);

    //# Istanze delle Classi
    //Oggetto/Istanza della classe Movie
    $movie1 = new Movie('Joker','Action','140 min',$director1);
    $movie1->introduce();
    //SECONDO OGGETTO MOVIE
    $movie2 = new Movie('Top Gun','Action','120 min',$director2);
    $movie1->introduce();
    var_dump($movie1->$director1->saluta(),$movie2);




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