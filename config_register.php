<?php

class DatabaseRegister
{
    public $server = 'localhost';
    public $username = 'root';
    public $password="";
    public $database = 'travelagency';
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo 'Connection Failed' . $e->getMessage();
        }
    }

    public function emailExists()
    {
        try {
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($this->conn, $email);
            $sql = "SELECT COUNT(*) AS count FROM travel_register WHERE email='$email'";
            $result = mysqli_query($this->conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row["count"] > 0;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function insert()
{
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];

        if ($this->emailExists($email)) {
            echo "<script>alert('A user with this email already exists!')</script>";
            echo "<script>window.location.href = 'register.php';</script>";
            return;
        } else {
            $query = "INSERT INTO travel_register(name, surname, email, phone, birthday, password, user_type) VALUES ('$name','$surname','$email','$phone','$birthday','$password', 'user')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>alert('You have been registered successfully!!');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            } else {
                echo "<script>alert('Registration failed. Please try again!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            }
        }
    }
}

    public function insert2()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];

            if ($this->emailExists()) {
                echo "<script>alert('A user with this email already exists!')</script>";
                echo "<script>window.location.href = 'userAdd.php';</script>";
                return;
            } else {
                $query = "INSERT INTO travel_register(name, surname, email,phone,birthday, password, user_type) VALUES ('$name', '$surname','$email','$phone','$birthday', '$password', '$user_type')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You have been registered successfully!!');</script>";
                    echo "<script>window.location.href = 'userDashboard.php';</script>";
                } else {
                    echo "<script>alert('The user already exists!');</script>";
                    echo "<script>window.location.href = 'userDashboard.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM travel_register";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function check()
    {

        if (isset($_POST['submit'])) {


            $email = $_POST['email'];
            $password = $_POST['password'];
            // $user_type = $_POST['user_type'];

            $select = "SELECT * FROM travel_register WHERE email = '$email' && password = '$password' ";

            $result = mysqli_query($this->conn, $select);
 
            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_array($result);

                if ($row['user_type'] == 'admin') {
                    $_SESSION['user_type'] = 'admin';

                    echo "<script>alert('You have logged in successfuly!!');</script>";
                    echo "<script>window.location.href = './dashboard/dashboard.php';</script>";
                } elseif ($row['user_type'] == 'user') {
                    $_SESSION['user_type'] = 'user';

                    echo "<script>alert('You have been logged in successfuly!!');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";

                }

            } else {
                echo "<script>alert('The email or password is invalid!');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            }

        }
        
    }


    public function delete($id)
    {

        $query = "DELETE FROM travel_register where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM travel_register WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {

        $query = "UPDATE travel_register SET name='$data[name]', surname='$data[surname]', email='$data[email]',phone='$data[phone]',birthday='$data[birthday]', password='$data[password]', user_type='$data[user_type]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
