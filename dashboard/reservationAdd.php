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
    <a class="navbar-brand" href="reservationDashboard.php">Reservations</a>
  </nav>
  <div class="container">
  <h1>Add Reservations</h1>
        <?php
            include '../config_rezervo.php';
            $rezervimi = new DatabaseRezervo();
            $insert = $rezervimi->insert();

            ?>
    <form action="" method="post">
        <label for="flying_from">Flying From</label>
        <input type="text" id="fromF" name="FlyingF" required>

        <label for="flying_to">Flying To</label>
        <input type="text" id="toF" name="FlyingT" required>

        <label for="departing">Departing</label>
        <input type="date" id="departingF" name="departing" required>

        <label for="returning">Returning</label>
        <input type="date" id="returningF" name="returning" required>
        
        <label for="adults">Adults</label>
        <input type="number" value="1" id="adultsF" name="adults"required >

        <label for="children">Children</label>
        <input type="number" value="0" id="childrenF" name="children"required>

        <label for="name">Name</label>
        <input type="text" id="nameF" name="name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="lastNameF" name="last_name" required>

        <label for="email">Email</label>
        <input type="email" id="emailF" name="email" required>

        <label for="travel">Travel</label>
                <select  id="travelClass" name="travel">
                    <option value="Economy Class">Economy Class</option>
                    <option value="Buisness Class">Buisness Class</option>
                    <option value="First Class">First Class</option>
                </select>

        <label class="rezervo" for="id-upload">Upload your Personal ID (optional)</label>
        <input type="file" name="images" id="images">

    <button type="submit" name="submit">Add Rezervation</button>
    </form>
    
  </div>
</body>
</html>