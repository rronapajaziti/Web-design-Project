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
        <form onsubmit="validimi(); return false;">
            <h1>Login</h1>
            <div class="emri-mbiemri">
                <input type="text" placeholder="Username" id="username">
                <div class="error-message1" id="usernameError"></div>
                <!-- icona e userit -->
                <i class='bx bxs-user'></i>
            </div>
            <div class="emri-mbiemri">
                <input type="password" placeholder="Password" id="password">
                <div class="error-message1" id="passwordError"></div>
                <!-- icona e drynit -->
                <i class='bx bxs-lock'></i>
            </div>
            <div class="remeber">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            
            <div class="register">
                <p>Don't have an account?<br><a href="Regjister.html">Register</a></p>
            </div>
        </form>
    </div>
    <script>
        let usernameRegex = /^[A-Za-z]{2,}$/;
        let passwordRegex = /^(?=.*[A-Z])(?=.*[@$!%*#?&])(?=.*\d)[A-Za-z@$!%*#?&\d]{8,}$/;

        function validimi() {
            let username = document.getElementById('username');
            let usernameError = document.getElementById('usernameError');
            let password = document.getElementById('password');
            let passwordError = document.getElementById('passwordError');
            
            usernameError.innerText = '';
            passwordError.innerText = '';

            if (!usernameRegex.test(username.value)) {
                usernameError.innerText = 'Username is invalid';
                return;
            }

            if (!passwordRegex.test(password.value)) {
                passwordError.innerText = 'Password is invalid';
                return;
            }
        {
           
            window.location.href = "Travel.html";
        }
    }
    </script>
</body>
</html>
