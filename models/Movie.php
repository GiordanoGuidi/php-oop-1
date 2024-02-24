<?php

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