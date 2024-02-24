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
        public $actors;
        //Funzione
        public function introduce()
        {
            echo 'Ciao, sono' . ' ' . $this->title;
        }
        //Costruttore
        public function __construct($title, $type, $length, Director $director, array $actors)
        {
            $this->title= $title;
            $this->type= $type;
            $this->length= $length;
            $this->director=$director;
            $this->actors=$actors;
        }

    }
//CLASSE DIRECTOR
class Director
    {
        //variabili di istanza
        public $firstName;
        public $lastName;
        public $age;

        //Costruttore
        public function __construct($firstName,$lastName,$age)
        {
            $this->firstName= $firstName;
            $this->lastName= $lastName;
            $this->age=$age;
        }
        //Metodo che costruisce il nome completo
        function getFullName()
        {
            return  $this->firstName . ' ' . $this->lastName;
        }
        //Metodo per presentare il director
        public function introduce()
        {
            echo 'ciao sono'. ' ' . $this->getFullName();
        }
    }
    //CLASSE ACTOR
    class Actor
    {
        //variabili di istanza
        public $firstName;
        public $lastName;
        public$age;

        //Costruttore
        public function __construct($firstName,$lastName,$age)
        {
            $this->firstName= $firstName;
            $this->lastName=$lastName;
            $this->age= $age;
        }

        public function saluta()
        {
            echo 'ciao sono'. ' ' . $this->name;
        }
    }

    //# Istanze delle Classi
    //Istanza della classe DIRECTOR
    $director1 = new Director('Todd','Phillips', '57');
    $director2 = new Director('Tony', 'Scott', '68');
    echo $director1->introduce();

    //Istanza della classe ACTOR
    $actor1 = new Actor('Joaquin','Phoenix','49');
    $actor2 = new Actor('Tom','Cruise','61');

    //Array degli attori
    $actors= [
        new Actor('Joaquin','Phoenix','49'),
        new Actor('Tom','Cruise','61'),
    ];



    //Istanza della classe Movie
    $movie1 = new Movie('Joker','Action','140 min',$director1,$actors);
    var_dump($movie1);

    //Seconda istanza MOVIE
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