<?php
include_once '../LidhjaDb.php';
include_once '../Offer.php';

class offerRepository{
    private $connection;
    function __construct(){
        $conn = new LidhjaDb;
        $this->connection = $conn->startConnection();
    }

    function insertOffers(Offer $offer,$adminName){
        $conn =$this->connection;

        $id = $offer->getId();
        $image_path = $offer->getImagePath();
        $name = $offer->getName();
        $description = $offer->getDescription();
        $price = $offer->getPrice();
        $rating = $offer->getRating();
        $location = $offer->getLocation();
        $days = $offer->getDays();
        $nights = $offer->getNights(); 

        $sql = "INSERT INTO offers(id,image_path, name, description, price, rating, location, days, nights,added_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?)";
        $statement = $conn->prepare($sql);

        $this->logOfferAssociation($id, $adminName);
        
        try {
            $statement->execute([$id, $image_path, $name, $description, $price, $rating, $location, $days, $nights, $adminName]);
            echo "<script> alert('Offer has been inserted successfully!');</script>";
        } catch (PDOException $e) {
            echo "<script> alert('Error: " . $e->getMessage() . "');</script>";
        }
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

        $sql = "SELECT * FROM offers WHERE id='$id'";

        $statement = $conn->query($sql);
        $offer = $statement->fetch();

        return $offer;
    }
    function updateOffer($id,$imagePath, $name, $description, $price, $rating, $location, $days, $nights)
    {
        $conn = $this->connection;

        $sql = "UPDATE offers SET name=?, description=?, price=?, rating=?, location=?, days=?, nights=?,image_path=? WHERE id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$name, $description, $price, $rating, $location, $days, $nights,$imagePath,$id]);

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
    private function logOfferAssociation($id, $adminName) {
        $conn = $this->connection;

        $sql = "UPDATE offers SET added_by=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$adminName, $id]);
    }


}
?>