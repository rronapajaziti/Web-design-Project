  <?php session_start()?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="Style.css"> 
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="trupi">
    <div class="log">
        <form method="post">
        <form onsubmit="validimi(); return false;" >
            <h1>Login</h1>
            <?php
            include 'config_register.php';
            $login = new DatabaseRegister();
            $check = $login->check();

            ?>
             
            <div class="emri-mbiemri">
                <input type="text" placeholder="Email" id="email"name="email">
                <div class="error-message1" id="emailError"></div>
                <!-- icona e userit -->
                <i class='bx bxs-user'></i>
            </div>
            <div class="emri-mbiemri">
                <input type="password" placeholder="Password" id="password" name="password">
                <div class="error-message1" id="passwordError"></div>
                <!-- icona e drynit -->
                <i class='bx bxs-lock'></i>
            </div>
            <div class="remeber">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            
            <button type="submit" name="submit" class="btn">Login</button>
            
            <div class="register">
                <p>Don't have an account?<br><a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
    
    <script>
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let passwordRegex = /^(?=.*[A-Z])(?=.*[@$!%*#?&])(?=.*\d)[A-Za-z@$!%*#?&\d]{8,}$/;

        function validimi() {
            let email = document.getElementById('email');
            let emailError = document.getElementById('emailError');
            let password = document.getElementById('password');
            let passwordError = document.getElementById('passwordError');
            
            emailError.innerText = '';
            passwordError.innerText = '';

            if (!emailRegex.test(email.value)) {
                emailError.innerText = 'Email is invalid';
                return;
            }

            if (!passwordRegex.test(password.value)) {
                passwordError.innerText = 'Password is invalid';
                return;
            }
        {
           
            window.location.href = "index2.php";
        }
    }
    </script>
</body>
</html>
