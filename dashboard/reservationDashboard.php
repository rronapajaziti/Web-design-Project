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
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  </nav>
  <div class="container">
    <h1>Reservations</h1>
    
     <a href="reservationAdd.php">  <button type="submit" name="submit" id="ReservationAdd">Add Reservations</button><br> <br> </a> 
    
    <table>
    <thead>
        <tr>
        <th>ID</th>
        <th>Flying From</th>
        <th>Flying To</th>
        <th>Departing</th>
        <th>Returning</th>
        <th>Adults</th>
        <th>Children</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Images</th>
        <th>Travel</th>
        <th>Action</th>
        </tr>
    </thead>
      <tbody>
      <?php
 
        include '../config_rezervo.php';
        $databaseRezervo = new DatabaseRezervo();
        $rows = $databaseRezervo->fetch();
        
        if(!empty($rows)){
        foreach($rows as $row){ 
      ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['flying_from']; ?></td>
                <td><?php echo $row['flying_to']; ?></td>
                <td><?php echo $row['departing']; ?></td>
                <td><?php echo $row['returning']; ?></td>
                <td><?php echo $row['adults']; ?></td>
                <td><?php echo $row['children']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['images']; ?></td>
                <td><?php echo $row['travel']; ?></td>
                <td>
                  <a href="rezervationDelete.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  <a href="reservationEdit.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
                </td>
              </tr>
              <?php
                }
                
              }
              
              else{
                echo "There is no data!";
              }
            ?>
      </tbody>
    </table>
  </div>
</body>
</html>