<!-- session_start();
include '../Web-design-Project/Regjistrimi.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $password=$_POST['password'];

        if(!empty($name)&& !empty($password)&& !is_numeric($name)){
        $regjistrimi = new Regjistrimi();
        $conn = $regjistrimi->startConnection();
        
            $query="select * from regjistrimidb where name='$name'limit 1 ";
            $result =mysqli_query($conn,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['password']==$password)
                    {
                        header("location:index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'>alert('wrong username or password')</script>";
        }
    }
     -->



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
        <form method="POST">
        <form onsubmit="validimi(); return false;" >
            <h1>Login</h1>
             
            <div class="emri-mbiemri">
                <input type="text" placeholder="Email" id="email">
                <div class="error-message1" id="emailError"></div>
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
                <p>Don't have an account?<br><a href="Regjister.php">Register</a></p>
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
           
            window.location.href = "Travel.php";
        }
    }
    </script>
</body>
</html>
