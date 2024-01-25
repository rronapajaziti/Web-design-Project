<?php

$offerId = $_GET['id'];
include_once '../offerRepository.php';

$offerRepository = new offerRepository();

$offer  = $offerRepository->getOfferById($offerId);

if (isset($_POST['editBtn'])) {
        echo "Form submitted!";
        $id = $offer['id'];
        $imagePath = $_POST['image_path'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $rating = $_POST['rating'];
        $location = $_POST['location'];
        $days = $_POST['days'];
        $nights = $_POST['nights'];

        $offerRepository->updateOffer( $id,$imagePath, $name, $description, $price, $rating, $location, $days, $nights);
        header("location:../dashboard/offersDashboard.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboardsStyle/userdashboard.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
    <a class="navbar-brand" href="offerDashboard.php">Offers</a>
  </nav>
<div class="container">
<h1>Edit Offers</h1>
<form action="" method="post">
    
        <label for="id">ID:</label>
        <input type="number" name="id" value="<?=$offer['id']?>" readonly><br>
        
        <label for="image_path">Image Path:</label>
        <input type="text" name="image_path" value="<?=$offer['image_path']?>"required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?=$offer['name']?>"required><br>

        <label for="description">Description:</label>
        <textarea name="description"  required><?=$offer['description']?></textarea><br>

        <label for="price">Price:</label>
        <input type="number" name="price" value="<?=$offer['price']?>"required><br>

        <label for="rating">Rating:</label>
        <input type="number" name="rating" value="<?=$offer['rating']?>" step="0.1" required><br>

        <label for="location">Location:</label>
        <input type="text" name="location" value="<?=$offer['location']?>"required><br>

        <label for="days">Days:</label>
        <input type="number" name="days" value="<?=$offer['days']?>"required><br>

        <label for="nights">Nights:</label>
        <input type="number" name="nights" value="<?=$offer['nights']?>" required><br>

        <button type="submit" name="editBtn" value="save">Edit Offer</button><br><br>
        </form>

</div>

</body>
</html>

