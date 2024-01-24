<?php
include_once '../offerRepository.php';
include_once '../Offer.php';

if (isset($_POST['offerRegjisterBtn'])) {
    if (empty($_POST['id'])||empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) ||
        empty($_POST['rating']) || empty($_POST['location']) || empty($_POST['days']) || empty($_POST['nights']) || empty($_POST['image_path'])) {
        echo "Fill all fields!";
    } else {
        $id = $_POST['id'];
        $imagePath = $_POST['image_path'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $rating = $_POST['rating'];
        $location = $_POST['location'];
        $days = $_POST['days'];
        $nights = $_POST['nights'];

        $offer = new Offer($id,$name,$imagePath, $description, $price, $rating, $location, $days, $nights);
        $offerRepository = new offerRepository();

        $offerRepository->insertOffers($offer);
    }
}


?>