<?php 
session_start ()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/0feed4ec37.js" crossorigin="anonymous"></script>
    <script src="Funksion.js"></script>
</head>

 
<body class="aboutUS">
    <header class="heading2">
        <div class="navbar">
        <div class="Logo">
            <img src="Photos/logo1.png" alt="Logo">
        </div>
        <ul>
        <li><a href="index.php"><h2>Home</h2></a></li>
        
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
             echo "<a class='log3' id='pad' href='logout.php'>Logout</a>";
                
            }
            ?>
            </li>
            </ul>
        </div>
    
    <div class="about">
        <h1>About  us</h1>
    </div>
    
    </header>



    <div class="Stafi">
        <div class="kontenti">
            <div class="rreshtiS">
                <div class="titulliUB">
                    <h1>Our Team</h1>
                    <p>“Find a group of people who challenge and inspire you,, spend a lot of time with them, and it will change your life.”</p>
                </div>
            </div>
    
                <div class="staf-cardAbout">
                <div class="card">
                    <div class="pjesa-fotoveUB">
                        <img src="Photos/f.jpg"  alt="" >
                    </div>
                    <div class="contenti-tjeterUB">
                        <h3>Luna</h3>
                        <h4>Travel Coordinator</h4>
                        <p>Make travel arrangements for individuals, groups and organizations, including scheduling flights and ground transportation, booking accommodations </p>
                    </div>
                </div>
             
           
                    <div class="card">
                        <div class="pjesa-fotoveUB">
                            <img src="Photos/m.jpg" alt="">
                        </div>
                        <div class="contenti-tjeterUB">
                            <h3>Jett</h3>
                            <h4>Travel Agent</h4>
                            <p>Provide their clients with good flights, transportation options, and accommodations such as hotels, motels, villas, and the like during their travel</p>
                        </div>
                    </div>
                
               
                        <div class="card">
                            <div class="pjesa-fotoveUB">
                                <img src="Photos/f3.jpg" alt="">
                            </div>
                            <div class="contenti-tjeterUB">
                                <h3>Dexter</h3>
                                <h4>Travel Consultant</h4>
                                <p>Advise clients about options for travel in accordance with stated objectives. They facilitate travel arrangements and accommodations for individuals and groups</p>
                            </div>
                        </div>
                        </div>

                     </div>   
                    
            </div>

<div class="story">
    <p></p>
</div>
<div class="wrapper">
    <div class="ro">
        <div class="image">
            <img src="Photos/pexels-spencer-davis-4353813.jpg" alt="">
        </div>
        <div class="contenti-AU">
            <h1>OUR STORY</h1>
            <h2>Our Travely Agency</h2>
            <p>Coral Travel is a full-service agency with over 26 years of experience in the travel industry.  </p>
                <p>We can help you plan your dream getaway, destination Wedding, Honeymoon, various vacations, or business travel needs.   
                </p>
                <p>Whether you use our online booking links or book directly with one of our experienced agents, we are here to help you!
                </p>



            </p>
        </div>
    </div>
</div>
 <div class="vacation">
    <img src="Photos/travel aesthetic.jpg" alt="">
    <div class="text">
        <h1>Vacation Mode: <br>
            Activated.</h1>
    </div>
 </div>
 <footer>
    <div class="rreshti">

    <div class="kolona">
        <img src="Photos/logo1.png" alt="Logo" class="logo">
        <h4>Our mission is to make traveling easier
            and safe for you and your loved ones. 
            Don't just get there, get there in style!</h4>
    </div>

    <div class="kolona">
        <h3>CONTACT US<div class="underline"><span></span></div></h3>
        <h4>Phone: +383 (0)44-124-567</h4>
        <p class="id">Email: Coral@travelagency.net</p>
        


    </div>
    <div class="kolona">
        <h3>ADDRESS <div class="underline"><span></span></div></h3>
        <a href="https://www.google.com/maps/place/Innovation+Campus+-+UBT/@42.5584196,21.1347945,15z/data=!4m2!3m1!1s0x0:0xf9155209d4ad0657?sa=X&ved=2ahUKEwi2vdS-sMGCAxXdFxAIHe4lA-UQ_BJ6BAhDEAA">Kalabria neighborhood, Prishtina 10000</a>
    </div>
    <div class="kolona">
        <h3>RECEIVE NEWS <div class="underline"><span></span></div></h3>
        <form method="post" class="form">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" placeholder="Enter your email" name="email" id="email" required>
                <?php
                        include 'config_email.php';
                        $contactForm = new DatabaseEmail();
                        $check = $contactForm->check();

                        ?>
                <button type="submit" name="submit"><i class="fa-solid fa-right-long" onclick="emalValid()"></i></button>
                <br>
                
            </form>
        <div class="error-messagee" id="emailiError"></div>
        <div class="social-media">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook" style="color: #ededed;"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" style="color: #ededed;"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fa-brands fa-x-twitter" style="color: #ededed;"></i></a>
            <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest" style="color: #ededed;"></i></a>
        </div>
    </div>
    </div>
    <div class="hr"><hr></div>
    <p class="Copyright">&copy; 2023 Coral Travel Agency</p>
    
</footer>
</body>
</html>