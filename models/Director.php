<?php

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