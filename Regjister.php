<?php session_start()
include_once '../Web-design-Project/RegjistrimiDB.php';
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $id=$_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];

        if(!empty($email)&& !empty($password)&& !is_numeric($email)){
            $query="insert into regjistrimidb(id,name,surname,email,phone,birthday,password) values('$id','$name','$surname','$email','$phone','$birthday','$password')";
            mysqli_query($con,$query);
            echo "<script type='text/javascript'>alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Please Enter some Valid Information')</script>";  
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjister</title>
    <link rel="stylesheet" href="Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body class="body-sign">
    <div class="signU">
        
        <form class="forma-Sign">
            <form method="POST">
            <h1>Sign Up</h1>
           
          
        
                <!-- <div class=""> -->
                    <div class="sg">
                        <label>Name:</label>
                     <i class='bx bx-user'></i>
                        <input type="text" id="name">
                        </div>
                        <div class="error-message" id="nameError1">
                        
                    </div>


                    <div class="sg">
                        <label >Surname</label>
                          <i class='bx bx-user'></i>
                        <input type="text"id="surname1">
                       </div>
                       <div class="error-message" id="surnameError1">
                      
                    </div>
                    

                    <div class="sg">
                        <label >Email</label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email"id="email1">
                        </div>
                        <div class="error-message" id="emailiError1">
                        
                    </div>
               

                <div class="sg"> 
                    <label >Phone</label>
                    <i class='bx bx-phone'></i>
                    <input type="text" id="phone1">
                   </div>
                   <div class="error-message" id="phoneError1">
                    
                </div>
            

                <div class="sg">
                    <label >Birthday</label>
                    <i class='bx bxs-calendar'></i>
                    <input type="date"id="Birthday1">
                    </div>
                    <div class="error-message" id="birthdayError1">
                    
                
                </div>
                <div class="sg">
                    <label >Password</label>

                   <i class='bx bx-lock-alt'></i>
                    <input type="password"id="password1">
                   </div>
                   <div class="error-message" id="passwordError1">
                     
                </div>

                <div class="sg">
                    <label >Confirm </label>
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" id="confrim1" >
                    </div>
                    <div class="error-message" id="confrimError1">
                     </div>
                <div class="Click">
                <p> <a href="Login.php">Log In!</a></p>
            </div>
            
            <div class="butoni-Sign">
                <button type="button"id="sign" onclick="validimiSignIn()">Sign up </button>
            </div>
 
        </form>

    </div>
              

    <!-- </div> -->
    

    <script>
        function validimiSignIn() {
        let nameInput = document.getElementById('name');
        let surnameInput = document.getElementById('surname1');
        let emailInput = document.getElementById('email1');
        let phoneInput = document.getElementById('phone1');
        let birthdayInput = document.getElementById('Birthday1');
        let passwordInput=document.getElementById('password1');
        let confrimInput=document.getElementById('confrim1')

        let nameError = document.getElementById('nameError1');
        let surnameError = document.getElementById('surnameError1');
        let emailError = document.getElementById('emailiError1');
        let phoneError = document.getElementById('phoneError1');
        let birthdayError = document.getElementById('birthdayError1');
        let passwordError1=document.getElementById('passwordError1');
        let confrimError1=document.getElementById('confrimError1');

        nameError.innerText = '';
        surnameError.innerText = '';
        emailError.innerText = '';
        phoneError.innerText = '';
        birthdayError.innerText = '';
        passwordError1.innerText='';
        confrimError1.innerText='';

        let namePattern = /^[A-Z][a-z]*$/;
        let surnamePattern = /^[A-Za-z]{2,}$/;
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let phonePattern = /^\d{10}$/;
        let minAge = 18;
        let password=/^(?=.*[A-Z])(?=.*[@$!%*#?&])(?=.*\d)[A-Za-z@$!%*#?&\d]{8,}$/;


        if (!namePattern.test(nameInput.value)) {
            nameError.innerText = 'Name is invalid';
            return;
        }
        if (!surnamePattern.test(surnameInput.value)) {
            surnameError.innerText = 'Surname is invalid';
            return;
        }
        if (!emailPattern.test(emailInput.value)) {
            emailError.innerText = 'Email is invalid';
            return;
        }
        if (!phonePattern.test(phoneInput.value)) {
            phoneError.innerText = 'Phone is invalid';
            return;
        }

        let enteredDate = new Date(birthdayInput.value);
        let today = new Date();
        let age = today.getFullYear() - enteredDate.getFullYear();

       
        if (age < minAge) {
            birthdayError.innerText = 'You must be at least 18 years old to register.';
            return;
        }
        if(!password.test(passwordInput.value)){
            passwordError1.innerText='It should start with an uppercase letter, contain special characters, as well as numbers.'
            return;
        }
        if(passwordInput.value!==confrimInput.value){
            confrimError1.innerText='Passwords do not match';
            return;
        }
      if (  namePattern.test(nameInput.value) &&
    surnamePattern.test(surnameInput.value) &&
    emailPattern.test(emailInput.value) &&
    phonePattern.test(phoneInput.value) &&
    password.test(passwordInput.value) &&
    passwordInput.value === confrimInput.value
) {
    window.location.href = "login.html";
}
    }
    </script>
    
    
    
</body>
</html>