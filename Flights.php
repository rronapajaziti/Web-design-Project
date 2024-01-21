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
            <li><a href="Travel.php"><h2>Home</h2></a></li>
            <li><a href="About us.php"><h2>About us</h2></a></li>
            <li><a href="Flights.php"><h2>Flights </h2></a></li>
            <li><a href="Hotels.php"><h2>Hotels</h2></a></li>
            <li><a href="Offers.php"><h2>Offers</h2></a></li>
        </ul>
        </div>
    </div> 
    <main>

        
        <div class="booking-form-box">
            <fieldset><legend><h1 class="u">Book Your Flights</h1></legend>
        
        <div class="radio">
            <p>Round-Trip
                <input type="radio" class="book" name="check" checked></p>
            <p>One-Way
                <input type="radio" class="book" name="check"></p>
        </div>
        <!-- -------------------------------Booking form---------------------------------------- -->
        <form action="">
            <div class="booking-form">
            <div class="pjeset">
            
            <div class="input">
                <label><h3>Flying From</h3></label>
            <input type="text" class="form-control" placeholder="City or Airport" id="fromF" required>
            <div class="error-message3" id="flyingFromError"></div>
        </div>
            <div class="input">
                <label><h3>Flying To</h3></label>
            <input type="text" class="form-control" placeholder="City or Airport" id="toF" required>
            <div class="error-message3" id="flyingToError"></div>
            </div>
            
        </div>
        <!-- -------------------------------Data---------------------------------------- -->
            <div class="pjeset">
           
            <div class="input">
                <label><h3>Departing</h3></label>
            
            <input type="date" class="form-control select-date" id="departingF" required>
        </div>
            
            <div class="input">
                <label><h3>Returning</h3></label>
            
            <input type="date" class="form-control select-date" id="returningF" required>
            </div>
            </div>

        <!-- -------------------------------Persona---------------------------------------- -->
            <div class="pjeset">
        
            <div class="input">
                <label><h3>Adults</h3></label>
            <input type="number" class="form-control" value="1" id="adultsF" required >
            <div class="error-message3" id="adultsError"></div>
        </div>
        
                
                <div class="input">
                    <label><h3>Children</h3></label>
            <input type="number" class="form-control" value="0" id="childrenF" required>
            <div class="error-message3" id="childrenError"></div>
            </div>
            
        </div>
        <!-- -------------------------------Personal info---------------------------------------- -->
        <div class="pjeset">
            <div class="input">
                <!-- boni me id krejt -->
                <label><h3>Name</h3></label>
            <input type="text" class="form-control" placeholder="name"id="nameF" required>
            <div class="error-message3" id="nameError"></div>
            </div>
            
        <div class="input">
            <label><h3>Last Name</h3></label>
        <input type="text" class="form-control" placeholder="Last name"id="lastNameF" required>      
          <div class="error-message3" id="lastNameError"></div>
        </div>

        <div class="input">
            <label><h3>Email</h3></label>
        <input type="email" class="form-control" placeholder="example@email.com" id="emailF" required>
        <div class="error-message3" id="emailErrors"></div>
       </div>
       
        </div>
        <!-- -------------------------------Travel/Butoni---------------------------------------- -->
        <div class="pjeset">
            <div class="input">
                <label><h3>Travel</h3></label>
                <select class="cosutum-select" id="travelClass">
                    <option value="1">Economy Class</option>
                    <option value="2">Buisness Class</option>
                    <option value="3">First Class</option>
                </select>
            </div>
            <a href="<?php if (isset($_SESSION['user_type'])) {
                echo "Flights.php";
            } else {
                echo "login.php";
            } ?>" class="bx">
                
            <div class="input">
                <button type="submit" class="button" onclick="validimiFlights()"><?php if (!isset($_SESSION['user_type'])) {
                    echo "onclick=\"alert('You cannot make rezervation without being logged in!')\"";
                } ?>>Book now</button>
              
            
            </a>  
            </div>
        </div>
            
        </div>
      </fieldset>
        </div>
    </form>

    </main>
</body>
</html>