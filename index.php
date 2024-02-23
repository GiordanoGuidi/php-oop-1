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

    }

    //Oggetto/Istanza della classe Movie
    $movie1 = new Movie();
    $movie1->title = 'Joker';
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