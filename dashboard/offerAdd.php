<?php
  include_once '../offerController.php';
?>
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
    <a class="navbar-brand" href="offersDashboard.php">Offers</a>
  </nav>
  <div class="container">
  <h1>Add Offers</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      
    <label for="id">ID:</label>
    <input type="number" name="id" readonly><br>

    <label for="image_path">Image Path:</label>
    <input type="text" name="image_path" required><br>

      <label for="name">Name:</label>
      <input type="text" name="name" required><br>

      <label for="description">Description:</label>
      <textarea name="description" required></textarea><br>

      <label for="price">Price:</label>
      <input type="number" name="price" required><br>

      <label for="rating">Rating:</label>
      <input type="number" name="rating" required><br>

      <label for="location">Location:</label>
      <input type="text" name="location" required><br>

      <label for="days">Days:</label>
      <input type="number" name="days" required><br>

      <label for="nights">Nights:</label>
      <input type="number" name="nights" required><br>

      <button type="submit" name="offerRegjisterBtn">Add Offer</button><br><br>
    </form>
    
  </div>
</body>
</html>