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
    <h1>Emails</h1>
    
    <table>
    <thead>
        <tr>
        <th>ID</th>
        <th>Email</th>
        </tr>
    </thead>
      <tbody>
      <?php
 
        include '../config_email.php';
        $databaseEmail = new DatabaseEmail();
        $rows = $databaseEmail->fetch();
        
        if(!empty($rows)){
        foreach($rows as $row){ 
      ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['email']; ?></td>
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