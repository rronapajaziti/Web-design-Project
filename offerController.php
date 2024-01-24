<?php
include_once '../offerRepository.php';
include_once '../offer.php';

if (isset($_POST['offerRegisterBtn'])) {
    if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) ||
        empty($_POST['rating']) || empty($_POST['location']) || empty($_POST['days']) || empty($_POST['nights'])) {
        echo "Fill all fields!";
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $rating = $_POST['rating'];
        $location = $_POST['location'];
        $days = $_POST['days'];
        $nights = $_POST['nights'];

        $offer = new Offer($name, $description, $price, $rating, $location, $days, $nights);
        $offerRepository = new OfferRepository();

        $offerRepository->insertOffer($offer);
    }
}


?>