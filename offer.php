<?php

class Offer {
    private $id;
    private $name;
    private $description;
    private $price;
    private $rating;
    private $location;
    private $days;
    private $nights;

    public function __construct($id, $name, $description, $price, $rating, $location, $days, $nights) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->rating = $rating;
        $this->location = $location;
        $this->days = $days;
        $this->nights = $nights;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getRating() {
        return $this->rating;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getDays() {
        return $this->days;
    }

    public function getNights() {
        return $this->nights;
    }
}
?>