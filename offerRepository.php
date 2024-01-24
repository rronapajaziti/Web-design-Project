<?php

include_once '../LidhjaDb.php';
include_once '../offer.php';

class offerRepository{
    private $connection;
    function __construct(){
        $conn = new LidhjaDb;
        $this->connection = $conn->startConnection();
    }

    function insertOffers($offer){
        $conn =$this->connection;

        $id = $offer->getId();
        $name = $offer->getName();
        $description = $offer->getDescription();
        $price = $offer->getPrice();
        $rating = $offer->getRating();
        $location = $offer->getLocation();
        $days = $offer->getDays();
        $nights = $offer->getNights(); 

        $sql = "INSERT INTO offers(id, name, description, price, rating, location, days, nights) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id, $name, $description, $price, $rating, $location, $days, $nights]);
        echo "<script> alert('Offer has been inserted successfully!');</script>";
    }
    function getAllOffers()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM offers";

        $statement = $conn->query($sql);
        $offers = $statement->fetchAll();

        return $offers;
    }
    function getOfferById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM offers WHERE Offer_id='$id'";

        $statement = $conn->query($sql);
        $offer = $statement->fetch();

        return $offer;
    }
    function updateOffer($id, $name, $description, $price, $rating, $location, $days, $nights)
    {
        $conn = $this->connection;

        $sql = "UPDATE offers SET name=?, description=?, price=?, rating=?, location=?, days=?, nights=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$name, $description, $price, $rating, $location, $days, $nights, $id]);

        echo "<script>alert('Update was successful');</script>";
    }
    function deleteOffer($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM offers WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }
}




?>