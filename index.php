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
            $this->age->$age;
        }

        public function saluta()
        {
            echo 'ciao sono'. ' ' . $this->name;
        }
    }

    //# Istanze delle Classi
    //Istanza della classe DIRECTOR
    $director1 = new Director('Todd','Phillips', 57);
    $director2 = new Director('Tony', 'Scott', 68);
    echo $director1->introduce();


    //Oggetto/Istanza della classe Movie
    $movie1 = new Movie('Joker','Action','140 min',$director1);
    // $movie1->introduce();

    //SECONDO OGGETTO MOVIE
    $movie2 = new Movie('Top Gun','Action','120 min',$director2);
    // $movie2->introduce();
    // echo $movie1->director->saluta();
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