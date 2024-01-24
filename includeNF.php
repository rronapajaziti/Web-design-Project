<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heading1{
            background-image: url(Photos/bg.jpg);
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: 100%;
            height: 75vh;
        }
    </style>
</head>
<body>
    <header class="heading1">
    <div class="navbar">
    <div class="Logo">
        <img src="Photos/logo1.png" alt="Logo">
    </div>
    <ul>
            <li>
            <?php
            if (!(isset($_SESSION['user_type']))) {
                echo "<a class='ula' id='pad' href='index.php'><h2>Home</h2></a>";
            } else if (isset($_SESSION['user_type']) == 'user') {
                echo "<a class='ula' id='pad' href='index2.php' style='color: red; font-size: inherit;'>Home</a>";
            }
            ?>
            </li>
            <li><a href="About us.php"><h2>About us</h2></a></li>
            <li><a href="<?php if (isset($_SESSION['user_type'])) {
                echo "Flights.php";
            } else {
                echo "login.php";
            } ?>" class="bx">
                
               <?php if (!isset($_SESSION['user_type'])) {
                    echo "<a onclick=\"alert('You cannot access Flights without being logged in!')\" href='login.php'><h2>Flights</h2></a>";
                    } else {
                        echo "<a href='Flights.php'><h2>Flights</h2></a>";
                    }?>

            </a></li>            <li><a href="Hotels.php"><h2>Hotels</h2></a></li>
            <li><a href="Offers.php"><h2>Offers</h2></a></li>
            <li>
            <?php
            if (!(isset($_SESSION['user_type']))) {
                echo "<a class='ula' id='pad' href='login.php'>Login</a>";
            } else if (isset($_SESSION['user_type']) == 'user') {
                echo "<a class='ula' id='pad' href='logout.php' style='color: red; font-size: inherit;'>Logout</a>";
            }
            ?>
            </li>
        </ul>
    </div>
</div> 
    </header>
</body>
</html>

