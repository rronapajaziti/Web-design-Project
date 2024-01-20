<?php
// session_start();

// include_once '../Web-design-Project/LidhjaDB.php';
// include_once '../Web-design-Project/username.php';

// if (isset($_POST['registerBtn'])) {
//     if (empty($_POST['id']) || empty($_POST['name']) || empty($_POST['surname']) ||
//         empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['birthday']) || 
//         empty($_POST['password']) || empty($_POST['confirm']) || empty($_POST['usertype'])) {
//         echo "Fill all fields!";
//     } else {
//         $id = $_POST['id'];
//         $name = $_POST['name'];
//         $surname = $_POST['surname1'];
//         $email = $_POST['email1'];
//         $phone = $_POST['phone1'];
//         $birthday = $_POST['birthday1'];
//         $password = $_POST['password1'];
//         $confirm = $_POST['confirm1'];
//         $usertype = $_POST['usertype'];

//         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//         $user = new username($id, $name, $surname, $phone, $birthday, $email, $hashedPassword, $confirm, $usertype);

//         $lidhjaDb = new LidhjaDb();
//         $conn = $lidhjaDb->startConnection();
        
//         if ($conn) {
//             echo "Connected to the database successfully!";
//         } else {
//             echo "Failed to connect to the database.";
//         }
//     }
// }
?> 
