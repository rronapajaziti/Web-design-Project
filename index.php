<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/0feed4ec37.js" crossorigin="anonymous"></script>
    <script src="Funksion.js"></script>
</head>
<body>
<header class="heading">
<div class="navbar">
    <div class="Logo">
        <img src="Photos/logo1.png" alt="Logo">
    </div>
    <ul>
        <li><a href="Travel.php"><h2>Home</h2></a></li>
        <li><a href="About us.php"><h2>About us</h2></a></li>
        <li><a href="Flights.php"><h2>Flights </h2></a></li>
        <li><a href="Hotels.php"><h2>Hotels</h2></a></li>
        <li><a href="Offers.php"><h2>Offers</h2></a></li>
    </ul>    
     
    </div>
   <div class="header1">
<div class="paragrafi">
    <h1>Enjoy your trip</h1>
    <p>Like never before,unique adventures that fill your soul with happiness and fun stories to tell. 
    </p>   
    <div>
        <a href="Login.php"><button type="button"><span></span>LOG IN</button></a>
        <a href="Regjister.php"><button type="button"><span></span>SIGN UP</button></a>
    </div>    
</div>
</div>
</header>
<main>   
 
    <!-- ---------------------------Pjesa 1--------------------------- -->
    <section class="destinacionet">
        <h1>The best offers</h1>
        <div class="container">
            <div class="row">
                <div class="column">
                    <div class="box">
                        <div class="images">
                            <img src="Photos/italy.jpg" alt="italy" class="img">
                            <div class="cmimi">
                                <p>89€</p>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="detaje">
                            <h4>Italy</h4>
                            <p>The Italian Riviera is defined by its rugged cliffs, turquoise coves and pastel seaside towns, 
                                including the colorful Cinque Terre fishing villages, 
                                as well as stylish resort areas such as Portofino and Santa Margherita Ligure!</p>
                                <div class="icona">
                                <p><i class="fa fa-location-dot"></i>Italy</p>
                                <p><i class="fa fa-sun"></i>4 Days</p>
                                <p><i class="fa fa-moon"></i>3 Nights</p>
                                </div>
                        </div>
                    </div>
                </div>
          
                <div class="column">
                    <div class="box">
                        <div class="images">
                            <img src="Photos/Santorini.jpg" alt="Santorini" class="img">
                            <div class="cmimi">
                                <p>150€</p>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>
                        <div class="detaje">
                            <h4>Greece</h4>
                            <p>Santorini, known since ancient times as Thira, is one of the most famous islands in the world. The fact that you can sit in front of the caldera, enjoy local dishes, a drink or a coffee while gazing at the
                                 remarkable beauty of an active volcano is priceless!</p>
                                    <div class="icona">
                                        <p><i class="fa fa-location-dot"></i>Greece</p>
                                        <p><i class="fa fa-sun"></i>5 Days</p>
                                        <p><i class="fa fa-moon"></i>4 Nights</p>
                                    </div>
                        </div>       
                    </div>
                </div>

                    <div class="column">
                       <div class="box">
                        <div class="images">
                            <img src="Photos/maldives.jpg" alt="Maldives" class="img">
                            <div class="cmimi">
                                <p>170€</p>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="detaje">
                            <h4>South Asia</h4>
                            <p>Paradise awaits you… If your idea of paradise is a pristine tropical island with swaying palm trees and pure white beaches surrounded by crystalline lagoons of varying shades of 
                                blue – then the Maldives will definitely fit the bill!</p>
                                 <div class="icona">
                                    <p><i class="fa fa-location-dot"></i>Maldives</p>
                                    <p><i class="fa fa-sun"></i>3 Days</p>
                                    <p><i class="fa fa-moon"></i>2 Nights</p>
                                </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ---------------------------Pjesa 2--------------------------- -->
    <section class="pjesa-2">

        <div class="content2">
        <p>Choose our travel agency for an unparalleled journey 
            that goes beyond exploration. With a commitment to 
            crafting unforgettable experiences, 
            we pride ourselves on meticulous planning, personalized itineraries, 
            and a dedication to exceeding your  your expectations.<br>
            Trust us to transform your travel dreams into reality, 
            providing you with not just a vacation, but a collection of timeless memories.
            At our travel agency, the journey is not just a destination; 
            it's a celebration of the extraordinary. </p>
            <div class="foto-2">
              <img src="Photos/place2.jpg" class="img2" width="300px" height="400px">
                <img src="Photos/place1.jpg" class="img1" width="400px" height="500px">
            </div>
        </div>
    </section>
    <!-- ---------------------------Pjesa 3--------------------------- -->
    <section>
        <div class="popular">
        <h1>Popular Destinations</h1>
        <div class="places">
            
        <div class="rretha-foto">
            <img src="Photos/Londra.jpg" alt=""> 
        </div>
        <div class="rretha-foto"><img src="Photos/Dubai.jpg" alt=""></div>
        <div class="rretha-foto"> <img src="Photos/foto4.jpg" alt=""></div>
           
           <div class="rretha-foto"> <img src="Photos/Mexico.jpg" alt=""></div>
           
           <div class="rretha-foto"> <img src="Photos/venice.jpg" alt=""></div>
           
        </div>
    </div>
    </section>
    <!-- ---------------------------Pjesa 4--------------------------- -->

    <section>
        <div class="texti">
            <h3>Traveling is a journey of self-discovery and a celebration of the 
                diverse wonders our world has to offer. </h3>
                <div class="vertikal"></div>
            <h3>
                One of the most rewarding aspects of travel is the chance to connect with
                 people from different corners of the globe
            </h3>
            <div class="vertikal"></div>
            <h3>
                Stepping outside our comfort zones and encountering unfamiliar environments can ignite our 
                imagination and open new doors of understanding. 
            </h3>
        </div>
        <h2 class="welcome">Wishing You a Pleasant Journey</h2>
    </section>
</main>
    <!-- ---------------------------Footeri--------------------------- -->
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
            <h3>RECIVE NEWS <div class="underline"><span></span></div></h3>
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

 
    

 