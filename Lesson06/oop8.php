<?php
// Abstract class
abstract class Shape {
    public $color;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    // Abstract methods
    public abstract function perimeter();
    public abstract function area(); // Corrected the typo from "arrea" to "area"
    public abstract function draw();
}

// Circle class that extends Shape
class Circle extends Shape {
    const PI = 3.14;
    private $radius;

    // Constructor to initialize radius
    function __construct($radius) { // Added $radius as a parameter
        $this->radius = $radius;
    }

    public function perimeter() { // Removed the extra semicolon
        return 2 * $this->radius * self::PI; // Corrected $this->$radius to $this->radius
    }

    public function area() { // Removed the extra semicolon and fixed the typo
        return self::PI * $this->radius * $this->radius;
    }

    public function draw() { // Removed the extra semicolon
        echo "<h2>The Circle is drawing...</h2>";
    }
}

// Test
$c = new Circle(10); // Corrected the constructor call with the radius parameter
echo "<h2>Perimeter: " . $c->perimeter() . "</h2>";
echo "<h2>Area: " . $c->area() . "</h2>";
$c->draw();

?>