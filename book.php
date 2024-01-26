<?php

class Book {
    protected $title;
    protected $yearPublished;
    protected $author;

    public function __construct($title = 'Title Not Known', $yearPublished = 'Year Not Known', $author = 'Author Not Known') {
        $this->title = $title;
        $this->yearPublished = $yearPublished;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getYearPublished() {
        return $this->yearPublished;
    }

    public function setYearPublished($yearPublished) {
        $this->yearPublished = $yearPublished;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function summary() {
        return "Book Title: {$this->title}, Year Published: {$this->yearPublished}, Book Author: {$this->author}";
    }
}

$book = new Book("Things Fall Apart", 2004, "Chinua Achebe");

echo $book->summary();

?>


<?php

class Rectangle {
    private $length;
    private $breadth;

    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getbreadth() {
        return $this->breadth;
    }

    public function setbreadth($breadth) {
        $this->breadth = $breadth;
    }

    public function calculateArea() {
        return $this->length * $this->breadth;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->breadth);
    }
}


echo "The Area of the Rectangle is: " . $rectangle->calculateArea();

echo "The Perimeter of the Rectangle is: " . $rectangle->calculatePerimeter();

?>



<?php

abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}


class Rectangle extends Shape {
    private $length;
    private $breadth;

    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function calculateArea() {
        return $this->length * $this->breadth;
    }
}


echo "The Area of the Triangle: " . $triangle->calculateArea();

echo "The Area of the Rectangle: " . $rectangle->calculateArea();

?>



<?php

class Vehicle {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function displayDetails() {
        return "Car brand: {$this->brand}, Car model: {$this->model}, Year of Manufacture: {$this->year}";
    }
}

$car = new Vehicle("Mercedes-Benz", "GLE", 2023);

echo $car->displayDetails();

?>



<?php

class MyCalculator {
    private $valueA;
    private $valueB;

    public function __construct($valueA, $valueB) {
        $this->valueA = $valueA;
        $this->valueB = $valueB;
    }

    public function add() {
        return $this->valueA + $this->valueB;
    }

    public function subtract() {
        return $this->valueA - $this->valueB;
    }

    public function multiply() {
        return $this->valueA * $this->valueB;
    }

    public function divide() {
        if ($this->valueB != 0) {
            return $this->valueA / $this->valueB;
        } else {
            return "You cannot divide by zero!";
        }
    }
}

?>
