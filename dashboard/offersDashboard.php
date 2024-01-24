<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboardsStyle/userdashboard.css">
</head>
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  </nav>
  <div class="container">
    <h1>Offers</h1>
    <a href="offerAdd.php">  <button type="submit" name="submit" id="offerAdd">Add Offers</button><br> <br> </a> 

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Image_path</th>
          <th>Name</th>
          <th>Description</th>
          <th>Rating</th>
          <th>Location</th>
          <th>Days</th>
          <th>Nights</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once '../offerRepository.php';

        $offerRepository = new offerRepository();

        $offers = $offerRepository->getAllOffers();

        if (!empty($offers)) {
          foreach ($offers as $offer) {
            ?>
            <tr>
              <td><?php echo $offer['id']; ?></td>
              <td><?php echo $offer['image_path']; ?></td>
              <td><?php echo $offer['name']; ?></td>
              <td><?php echo $offer['description']; ?></td>
              <td><?php echo $offer['rating']; ?></td>
              <td><?php echo $offer['location']; ?></td>
              <td><?php echo $offer['days']; ?></td>
              <td><?php echo $offer['nights']; ?></td>
              <td>
                <a href="/dashboard/offerDelete.php?id=<?php echo $offer['id']; ?>" class="btn btn1">Delete</a>
                <a href="/dashboard/offerEdit.php?id=<?php echo $offer['id']; ?>" class="btn btn2">Edit</a>
              </td>
            </tr>
          <?php
          }

        } else {
          echo "There is no data!";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>