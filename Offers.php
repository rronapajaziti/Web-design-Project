<?php session_start ();
include "includeNF.php" ;
include "LidhjaDb.php";

$database = new LidhjaDb();
$conn = $database->startConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/0feed4ec37.js" crossorigin="anonymous"></script>
    <title>Oferta</title>
</head>
<body>
    <div class="destinacionet">
    <h1>Offers</h1>
    


<?php
$sql = "SELECT * FROM offers";
$result = $conn->query($sql);

if($result->rowCount() > 0){
    while($row = $result->fetch()){
        echo  '<div class="container">
        <div class="row">
        <div class="column">
        <div class="box">
            <div class="images">
                <img src="' . $row['image_path'].'". alt="' . $row['name'] . '" class="img">
                <div class="cmimi">
                    <p>' . $row['price'] ."€". '</p>
                </div>
                <div class="rating">
                    ' . generateStars($row['rating']) . '
                </div>
            </div>
            <div class="detaje">
                <h4>' . $row['name'] . '</h4>
                <p>' . $row['description'] . '</p>
                <div class="icona">
                    <p><i class="fa fa-location-dot" ></i>' . $row['location'] . '</p>
                    <p><i class="fa fa-sun"></i>' . $row['days'] ."Days". '</p>
                    <p><i class="fa fa-moon"></i>' . $row['nights'] ."Nights". '</p>
                </div>
            </div>
        </div>
    </div>
    </div></div>';
    }
}else{
    echo "We found 0 results";
}

function generateStars($rating){
    $stars = '';
    for($i =0; $i<$rating;$i++){
        $stars .= '<i class="fa fa-star"></i>';
    }
    if ($rating - floor($rating) === 0.5) {
        $stars .= '<i class="fa fa-star-half"></i>';
    }
    return $stars;
}
?>
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
