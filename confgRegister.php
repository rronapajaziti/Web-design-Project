<?php
session_start();

include_once '../Web-design-Project/Regjistrimi.php';
include_once '../Web-design-Project/username.php';

if (isset($_POST['registerBtn'])) {
    if (empty($_POST['id']) || empty($_POST['name']) || empty($_POST['surname']) ||
        empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['birthday']) || 
        empty($_POST['password']) || empty($_POST['confirm']) || empty($_POST['usertype'])) {
        echo "Fill all fields!";
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $usertype = $_POST['usertype'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $user = new regjistrimidb($id, $name, $surname, $phone, $birthday, $email, $hashedPassword, $confirm, $usertype);

        $confgRegister = new confgRegister();

        if ($confgRegister->insert($user)) {
            echo "User registered successfully!";
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}
?>
