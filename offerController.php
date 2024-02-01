<?php
session_start();
include_once '../offerRepository.php';
include_once '../Offer.php';

if (isset($_POST['offerRegjisterBtn'])) {
    if (($_POST['id'])||empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) ||
        empty($_POST['rating']) || empty($_POST['location']) || empty($_POST['days']) || empty($_POST['nights']) || empty($_POST['image_path'])) {
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

        $adminName = (isset($_SESSION['user_type']) && isset($_SESSION['name']) && $_SESSION['user_type'] === 'admin') ? $_SESSION['name'] : 'Unknown';

        $offer = new Offer($id,$imagePath,$name, $description, $price, $rating, $location, $days, $nights,$adminName);
        $offerRepository = new offerRepository();

        $offerRepository->insertOffers($offer,$adminName);
    }
}


?>