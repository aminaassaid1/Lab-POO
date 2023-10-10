<?php

namespace MyApp;

// Define a trait
trait Loggable
{
    public function log($message)
    {
        echo "Log: $message\n";
    }
}

// Define an interface
interface Printable
{
    public function printInfo();
}

// Define a class Constants
class Constants
{
    const MAX_LENGTH = 100;
}

// Class Stagiaire implements Printable
class Stagiaire implements Printable
{
    private $name;
    private $cne;
    private $ville;

    // Use Loggable trait
    use Loggable;

    public function __construct($name, $cne, Ville $ville)
    {
        $this->name = $name;
        $this->cne = $cne;
        $this->ville = $ville;
    }

    public function introduce()
    {
        echo "Hello, I am {$this->name}, my CNE is {$this->cne}, and I am from {$this->ville->getNomVille()}.\n";
    }

    // Implement the Printable interface
    public function printInfo()
    {
        echo "Printing information for {$this->name} with CNE {$this->cne} and from {$this->ville->getNomVille()}.\n";
    }

    // Static method
    public static function sayHelloStatic()
    {
        echo "Hello from static method!\n";
    }

    // Class constant usage
    public function maxLengthExample($input)
    {
        if (strlen($input) > Constants::MAX_LENGTH) {
            echo "Input exceeds the maximum length.\n";
        } else {
            echo "Input is within the allowed length.\n";
        }
    }
}

// Class Ville
class Ville
{
    private $nomVille;

    public function __construct($nomVille)
    {
        $this->nomVille = $nomVille;
    }

    public function getNomVille()
    {
        return $this->nomVille;
    }
}

// Example usage

// Creating Ville object
$tanger = new Ville("Tanger");

// Creating Stagiaire object
$amina = new Stagiaire("Amina", "R45123659", $tanger);

// Accessing object properties
echo "Stagiaire Name: " . $amina->getName() . "\n";

// Using a method
$amina->introduce();

// Using trait method
$amina->log("This is a log message.");

// Using static method
Stagiaire::sayHelloStatic();

// Using class constant
$amina->maxLengthExample("This is a long text.");

// Implementing interface method
$amina->printInfo();
