<?php
	session_start();
	if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] === 'user') {
		echo '<div class="overlay" id="overlay"></div>
			<div class="custom-alert" id="customAlert">
				<p>You are not authorized to access this page</p>
				<button onclick="closeAndRedirect()">OK</button>
			</div>';
	
		echo '<script>
				function showCustomAlert() {
					document.getElementById("overlay").style.display = "block";
					document.getElementById("customAlert").style.display = "block";
				}
	
		function closeCustomAlert() {
			document.getElementById("overlay").style.display = "none";
			document.getElementById("customAlert").style.display = "none";
		}
	
		function closeAndRedirect() {
			closeCustomAlert();
			window.location.href = "../Login.php";
		}
	
				window.onload = function () {
					showCustomAlert();
				};
	</script>';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboardsStyle/dashboard.css">
    <title>Main Dashboard</title>
</head>
   

<body><br>
	<a href="../logout.php"><button class="top-left-btn">Log Out</button></a>
    <br><br>
    <h1>Dashboard</h1>
    <div class="container">
        
		<div class="card">
			<h2>Users</h2>
			<p>Registered Users</p>
			<a href="userDashboard.php">View</a>
        </div>
        
		<div class="card">
			<h2>Reservations</h2>
			<p>Registered Reservations</p>
			<a href="ReservationDashboard.php">View</a>
		</div>
		<div class="card">
			<h2>Offers</h2>
			<p>Update Offers</p>
			<a href="offersDashboard.php">View</a>
		</div>
		<div class="card">
			<h2>Emails</h2>
			<p>Email Review</p>
			<a href="emailDashboard.php">View</a>
		</div>
		</div>
</body>
</html> 