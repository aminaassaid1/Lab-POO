<?php

class Person {
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
}

class Intern extends Person {
    public $cne;

    public function __construct($nom, $prenom, $age, $cne) {
        parent::__construct($nom, $prenom, $age);
        $this->cne = $cne;
    }
}

class City {
    public $nom_city;

    public function __construct($nom_city) {
        $this->nom_city = $nom_city;
    }
}

// Your specific information
$amina = new Intern("Assaid", "Amina", 20, "P84561999");
$tanger = new City("Tanger");

// Accessing attributes
echo "{$amina->prenom} {$amina->nom} is {$amina->age} years old and has CNE {$amina->cne}.\n";
echo "She lives in {$tanger->nom_city}.\n";

?>
