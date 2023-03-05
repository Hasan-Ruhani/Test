<?php
abstract class Shape {
  protected $color;
  
  public function __construct($color = "red") {
    $this->color = $color;
  }
  
  abstract public function getArea();
}

class Circle extends Shape {
  protected $radius;
  
  public function __construct($radius, $color) {
    parent::__construct($color);
    $this->radius = $radius;
  }
  
  public function getArea() {
    return pi() * pow($this->radius, 2);
  }
}

class Square extends Shape {
  protected $length;
  
  public function __construct($length, $color) {
    parent::__construct($color);
    $this->length = $length;
  }
  
  public function getArea() {
    return pow($this->length, 2);
  }
}

$circle = new Circle(5, "blue");
echo "The area of the circle is: " . $circle->getArea(). "\n"; // Output: The area of the circle is: 78.539816339745

$square = new Square(4, "green");
echo "The area of the square is: " . $square->getArea(); // Output: The area of the square is: 16

