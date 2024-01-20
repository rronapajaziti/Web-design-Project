<?php
include_once 'LidhjaDb.php';

class userRepository{
    private $connection;

    function __construct(){
        $conn = new LidhjaDb;
        $this->connection = $conn->startConnection();
    }

    function insert($user){
        $conn = $this->connection;

        $name = $user->getName();
        $surname = $user->getSurname();
        $birthday = $user->getBirthday();
        $email = $user->getEmail();
        $phone = $user->getPhone();
        $password = $user->getPassword();
        $confirm = $user->getConfirm();
        $userType = $user->getUsertype();

        $sql = "INSERT INTO username (id,name, surname, email,phone,birthday, password,confirm, user_type) 
        VALUES (?,?,?,?,?,?,?,?,?)";
try {
    $statement = $conn->prepare($sql);
    $statement->execute([$id,$name,$surname,$phone,$birthday,$email,$password,$confirm,$usertype]);
    echo "<script> alert('Studenti është regjistruar me sukses!'); </script>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
}
?>
