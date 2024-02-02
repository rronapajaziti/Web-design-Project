<?php 
 session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/0feed4ec37.js" crossorigin="anonymous"></script>
    <script src="Funksion.js"></script>
</head>
<body>
    <header class="heading3">
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
                echo "<a class='log3' id='pad' href='login.php'>Login</a>";
            } else if (isset($_SESSION['user_type']) == 'user') {
             echo "<a class='log3' id='pad' href='logout.php'>Logout</a>";
                
            }
            ?>
            </li>
        </ul>
        </div>
    </div>
         <!-- ---------------------------Slideshow header--------------------------- -->

         <div class="slides">
            <div class="holder">
            <img id="slide" src="Photos/hotel1.jpg">
            <img id="slide2" src="Photos/hotel6.jpg">
        </img>
            </div> 
        </div>
    
    
 </header>
<!-- -------------------Ofertat e hoteleve-------------------------- -->
 <section>
      <div class="hotelet">
        <div class="hotel-box">
            <img src="Photos/h1.jpg" alt="">
            <div class="text-hotel"> 
                <h2>Standard Room: Starting at €120 per night</h2>
            <h2>Deluxe Suite with Sea View: Starting at €250 per night</h2>
            <p>Welcome to "Soléa Retreat," a charming hotel nestled in the heart
                 of Spain's picturesque Costa del Sol. This exquisite establishment 
                 captures the essence of Mediterranean luxury, providing 
                guests with an unforgettable blend of comfort, style, and cultural richness.</p>
        </div> 
        </div>
        <div class="hotel-box2">
            <img src="Photos/h2.jpg" alt="">
            <div class="text-hotel"> 
                <h2>Standard Room: Starting at €100 per night</h2>
            <h2>Deluxe Suite with Sea View: Starting at €300 per night</h2>
            <p>Nestled in the heart of the South Pacific, Paradise Haven Resort 
                stands as a beacon of luxury amid the crystal-clear waters of Bora Bora
                . This exclusive retreat is a harmonious blend of natural beauty and 
                opulent comfort, 
                offering an unparalleled escape for discerning travelers.</p>
        </div>  
        </div>

        <div class="hotel-box">
            <img src="Photos/h3.jpg" alt="">
            <div class="text-hotel"> 
                <h2>Standard Room: Starting at €250 per night</h2>
            <h2>Luxury Oceanview Suite with Private Balcony:
                Starting at $350 per night</h2>
            <p>Nestled along the sun-kissed shores of the Mexican Riviera,
                 Casa del Mar stands as a testament to luxury and tranquility. 
                 This exquisite hotel invites you to embark on a journey of relaxation and
                  cultural immersion, 
                where the vibrant spirit of Mexico meets modern comfort.</p>
        </div> 
        </div>

        <div class="hotel-box2">
            <img src="Photos/h4.jpg" alt="">
            <div class="text-hotel"> 
                <h2>Standard Room: Starting at €220 per night</h2>
            <h2>Deluxe Suite with Sea View: Starting at €400 per night</h2>
            <p>Welcome to Casa de Sevilla, an enchanting hotel nestled in the heart of the historic district of Seville. 
                This boutique gem captures the essence of Spanish hospitality, 
                combining modern comfort with traditional Andalusian charm.</p>
        </div>  
        </div>
        <div class="hotel-box">
            <img src="Photos/h6.jpg" alt="">
            <div class="text-hotel"> 
                <h2>Standard Room: Starting at €150 per night</h2>
            <h2>Deluxe Suite: Starting at €350 per night</h2>
            <p>Welcome to our charming hotel nestled in the heart of Amsterdam, 
                where historic elegance meets modern comfort. Our hotel is 
                strategically located, providing easy access to the city's iconic 
                attractions, 
                cultural landmarks, and vibrant neighborhoods.</p>
        </div>  
        </div>

        <div class="hotel-box2">
            <img src="Photos/h5.jpg" alt="">
            <div class="text-hotel"> 
                <h2>Standard Room: Starting at €230 per night</h2>
            <h2>Deluxe Suite with mountain view: Starting at €450 per night</h2>
            <p>The Mountain View Grand Resort & Spa is set against the 
                picturesque backdrop of the White Mountains, offering breathtaking 
                views of the surrounding natural beauty. The resort combines 
                classic charm with modern amenities, 
                providing guests with a memorable and comfortable stay.</p>
        </div>  
        </div>

      </div>
 </section>

 <section>
    <div class="contact-us">
        <div class="contact-text">
        <h1>Contact Us</h1>
        <p>If you have any questions, you are welcome 
            to leave us an eamil and we will get back 
            to you as soon as posible!
        </p>
    </div>
        <a href="mailto:Coral@travelagency.net"> <button type="submit" class="bt">Send email</button></a>
    </div>
 </section>


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