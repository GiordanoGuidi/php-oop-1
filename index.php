<?php
class Movie
    {
        //variabili di istanza
        public $title;
        public $type;
        public $length;
        //Funzione
        public function introduce()
        {
            echo 'Ciao, sono' . ' ' . $this->title;
        }
        //Costruttore
        public function __construct($title, $type, $length)
        {
            $this->title= $title;
            $this->type= $type;
            $this->length= $length;
        }

    }

    //Oggetto/Istanza della classe Movie
    $movie1 = new Movie('Joker','Action','140 min');
    $movie1->introduce();


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