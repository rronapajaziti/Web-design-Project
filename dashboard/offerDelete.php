<?php

$offerId = $_GET['id'];
include_once '../offerRepository.php';

$offerRepository = new offerRepository();

$offerRepository->deleteOffer($offerId);

header("location:../dashboard/offersDashboard.php");


?>