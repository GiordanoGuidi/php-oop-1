<?php 

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
