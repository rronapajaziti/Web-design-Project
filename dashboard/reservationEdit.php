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
    <h1>Edit Reservations</h1>
    <?php
            include '../config_rezervo.php';
            $databaseRezervo = new DatabaseRezervo();
            $id = $_REQUEST['id'];
            $row = $databaseRezervo->edit($id);
            if (isset($_POST['update'])) {
                if (
                    isset($_POST['flying_from']) &&  
                    isset($_POST['flying_to']) && 
                    isset($_POST['adults']) &&
                    isset($_POST['departing']) &&
                    isset($_POST['returning']) && 
                    isset($_POST['children']) &&
                    isset($_POST['name']) &&
                    isset($_POST['last_name']) &&
                    isset($_POST['email']) &&
                    isset($_POST['travel']) &&
                    isset($_POST['images'])
                ) {
                    $data['id'] = $id;
                    $data['flying_from'] = $_POST['flying_from'];
                    $data['flying_to'] = $_POST['flying_to'];
                    $data['adults'] = $_POST['adults'];
                    $data['departing'] = $_POST['departing'];
                    $data['returning'] = $_POST['returning'];
                    $data['children'] = $_POST['children'];
                    $data['name'] = $_POST['name'];
                    $data['last_name'] = $_POST['last_name'];
                    $data['email'] = $_POST['email'];
                    $data['travel'] = $_POST['travel'];
                    $data['images'] = $_POST['images'];
            
                    $update = $databaseRezervo->update($data);
                    if ($update) {
                        echo "<script>alert('Reservation has been updated!');</script>";
                        echo "<script>window.location.href = 'reservationDashboard.php';</script>";
                    } else {
                        echo "<script>alert('Update FAILED try again!');</script>";
                        echo "<script>window.location.href = 'reservationDashboard.php';</script>";
                    }
                } else {
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: reservationEdit.php?id=$id");
                }
            }
            
        ?>
        <form action="" method="post">
        <label for="flying_from">Flying From</label>
        <input type="text" id="fromF" name="flying_from" value="<?php echo $row['flying_from']; ?>" required>

        <label for="flying_to">Flying To</label>
        <input type="text" id="toF" name="flying_to" value="<?php echo $row['flying_to']; ?>" required>

        <label for="departing">Departing</label>
        <input type="date" id="departingF" name="departing" value="<?php echo $row['departing']; ?>" required>

        <label for="returning">Returning</label>
        <input type="date" id="returningF" name="returning" value="<?php echo $row['returning']; ?>" required>
        
        <label for="adults">Adults</label>
        <input type="number"  id="adultsF" name="adults" value="<?php echo $row['adults']; ?>" required>

        <label for="children">Children</label>
        <input type="number" id="childrenF" name="children" value="<?php echo $row['children']; ?>" required>

        <label for="name">Name</label>
        <input type="text" id="nameF" name="name"  value="<?php echo $row['name']; ?>" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="lastNameF" name="last_name" value="<?php echo $row['last_name']; ?>"required>

        <label for="email">Email</label>
        <input type="email" id="emailF" name="email" value="<?php echo $row['email']; ?>" required>

        <label for="travel">Travel</label>
                <select  id="travelClass" name="travel" value="<?php echo $row['travel']; ?>">
                    <option value="Economy Class">Economy Class</option>
                    <option value="Buisness Class">Buisness Class</option>
                    <option value="First Class">First Class</option>
                </select>

        <label class="rezervo" for="images">Upload your Personal ID (optional)</label>
        <input type="file" name="images" id="images" value="<?php echo $row['images']; ?>">
    

    <button type="submit" name="update">Edit Reservation</button>
    </form>
    
</div>
</body>
</html>
