<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
    <link rel="stylesheet" href="Style.css">
    <script src="Funksion.js"></script>
</head>
<body class="body">
    <header class="heading1">
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
                
                <a href= "Flights.php" class="bx bxs-contact stil"<?php if (!isset($_SESSION['user_type'])) {
                    echo "onclick=\"alert('You cannot make rezervation without being logged in!')\"";
                } ?>><h2>Flights</h2></a>
            </a></li>            <li><a href="Hotels.php"><h2>Hotels</h2></a></li>
            <li><a href="Offers.php"><h2>Offers</h2></a></li>
            <!-- <li>
            <?php
            if (!(isset($_SESSION['user_type']))) {
                echo "<a class='ula' id='pad' href='login.php'>Login</a>";
            } else if (isset($_SESSION['user_type']) == 'user') {
                echo "<a class='ula' id='pad' href='logout.php' style='color: red; font-size: inherit;'>Logout</a>";
            }
            ?>
            </li> -->
        </ul>
        </div>
    </div> 
    <main>

          <form  name="myForm" method="post">
            
          <?php
            include 'config_rezervo.php';
            $rezervo = new DatabaseRezervo();
            $insert = $rezervo->insert();
        ?>
        <div class="booking-form-box">
            <fieldset><legend><h1 class="u">Book Your Flights</h1></legend>
         
        <!-- <div class="radio">
            <p>Round-Trip
                <input type="radio" class="book" name="check" checked></p>
            <p>One-Way
                <input type="radio" class="book" name="check"></p>
        </div> -->

        <!-- -------------------------------Booking form---------------------------------------- -->
      
            <div class="booking-form">
            <div class="pjeset">
          

            <div class="input">
                <label><h3>Flying From</h3></label>
            <input type="text" class="form-control" placeholder="City or Airport" id="fromF" name="flying_from" required>
            <div class="error-message3" id="flyingFromError"></div>
        </div>
            <div class="input">
                <label><h3>Flying To</h3></label>
            <input type="text" class="form-control" placeholder="City or Airport" id="toF"  name="flying_to" required>
            <div class="error-message3" id="flyingToError"></div>
            </div>
            
        </div>
        <!-- -------------------------------Data---------------------------------------- -->
            <div class="pjeset">
           
            <div class="input">
                <label><h3>Departing</h3></label>
            
            <input type="date" class="form-control select-date" id="departingF" name="departing"required>
        </div>
            
            <div class="input">
                <label><h3>Returning</h3></label>
               

            <input type="date" class="form-control select-date" id="returningF" name="returning"required>
            </div>
            </div>

        <!-- -------------------------------Persona---------------------------------------- -->
            <div class="pjeset">
        
            <div class="input">
                <label><h3>Adults</h3></label>
            <input type="number" class="form-control" value="1" id="adultsF" name="adults"required >
            <div class="error-message3" id="adultsError"></div>
        </div>
        
                
                <div class="input">
                    <label><h3>Children</h3></label>
            <input type="number" class="form-control" value="0" id="childrenF" name="children"required>
            <div class="error-message3" id="childrenError"></div>
            </div>
            
        </div>
        <!-- -------------------------------Personal info---------------------------------------- -->
        <div class="pjeset">
            <div class="input">
                <!-- boni me id krejt -->
                <label><h3>Name</h3></label>
            <input type="text" class="form-control" placeholder="name"id="nameF" name="name" required>
            <div class="error-message3" id="nameError"></div>
            </div>
            
        <div class="input">
            <label><h3>Last Name</h3></label>
        <input type="text" class="form-control" placeholder="Last name"id="lastNameF" name="last_name" required>      
          <div class="error-message3" id="lastNameError"></div>
        </div>

        <div class="input">
            <label><h3>Email</h3></label>
        <input type="email" class="form-control" placeholder="example@email.com" id="emailF" name="email" required>
        <div class="error-message3" id="emailErrors"></div>
       </div>
       
        </div>
        <!-- -------------------------------Travel/Butoni---------------------------------------- -->
        <div class="pjeset">
            <div class="input">
                <label><h3>Travel</h3></label>
                <select class="cosutum-select" id="travelClass" name="travel">
                    <option value="Economy Class">Economy Class</option>
                    <option value="Buisness Class">Buisness Class</option>
                    <option value="First Class">First Class</option>
                </select>
            </div>
            <a href="<?php if (isset($_SESSION['user_type'])) {
                echo "Flights.php";
            } else {
                echo "login.php";
            } ?>" class="bx">
         
              </a> 
              <div class="input">
              <label class="rezervo" for="id-upload">Upload your Personal ID (optional)</label>
                <input type="file" name="images" id="images">
                </div>
        </div>
                 


            <div class="input">
                <button name="submit" type="submit" class="button" onclick="validimiFlights()">
                <?php if (!isset($_SESSION['user_type'])) {
                    echo "onclick=\"alert('You cannot make rezervation without being logged in!')\"";
                } ?>Book now</button>
              
             
             
            </div>
            </div>
            
        </div>
      </fieldset>
        </div>
    

  
</main>
</form>
</body>
</html>