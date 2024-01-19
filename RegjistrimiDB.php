<?php

class RegjistrimiDB 
{
    public $server = 'localhost';
    public $username = 'root';
    public $password;
    public $database = 'travel agency';
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo 'Connection Failed' . $e->getMessage();
        }
    }
    //metode per kontrollimin e emaiilit
    public function emailExists()
    {
        try {
            $email = $_POST['email'];
            //kontrollon nese ekziston emaili ne rresht
            $email = mysqli_real_escape_string($this->conn, $email);
            $sql = "SELECT COUNT(*) AS count FROM regjistrimidb WHERE email='$email'";
            $result = mysqli_query($this->conn, $sql);

           
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                 //kushti nqoftsre qeky counteri me i madh se 0, emaili ekziston
                return $row["count"] > 0;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    //metode qe perdoret per me shtu 
    public function insert()
    {
        if (isset($_POST['submit'])) {

            $id=$_POST['id'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];


            if ($this->emailExists()) {
                echo "<script>alert('A user with this email already exists!')</script>";
                echo "<script>window.location.href = 'Regjister.php';</script>";
                return;
            } else {
                $query = "INSERT INTO RegjisterDB(id,name, surname, email,phone,birthday, password,confirm, user_type) VALUES ('$name', '$surname','$email','$phone','$birthday', '$password','$confirm', 'user')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You have been registered successfully!!');</script>";
                    echo "<script>window.location.href = 'Login.php';</script>";
                } else {
                    echo "<script>alert('The user already exists!');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
    }
    //per usertype
    public function insert2()
    {
        if (isset($_POST['submit'])) {

            $id=$_POST['id'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $birthday = $_POST['birthday'];
            $password = $_POST['password'];
            $confrim = $_POST['confrim'];
            $user_type = $_POST['user_type'];

            if ($this->emailExists()) {
                echo "<script>alert('A user with this email already exists!')</script>";
                echo "<script>window.location.href = 'userAdd.php';</script>";
                return;
            } else {
                $query = "INSERT INTO regjistrimidb(name, surname, email,phone,birthday, password,confirm, user_type) VALUES ('$name', '$surname','$email','$phone','$birthday', '$password','$confirm', '$user_type')";
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
    function getAllUsers()
    //incializim i te dhanave permes while qe me  për të marrë rreshtat e të dhënave nga rezultati i kthyer nga databaza edhe tani te rujta te vlera data
    {
        $data = null;
        $query = "SELECT * FROM regjistrimidb";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    //kontrollin per admin
    function check()
    {

        if (isset($_POST['submit'])) {


            $email = $_POST['email'];
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];

            $select = "SELECT * FROM regjistrimidb WHERE email = '$email' && password = '$password' ";

            $result = mysqli_query($this->conn, $select);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_array($result);

                if ($row['user_type'] == 'admin') {
                    $_SESSION['user_type'] = 'admin';

                    echo "<script>alert('You have logged in successfuly!!');</script>";
                    //lidhjen me dashboard
                    echo "<script>window.location.href = './dashboard/dashboard.php';</script>";
                } elseif ($row['user_type'] == 'user') {
                    $_SESSION['user_type'] = 'user';

                    echo "<script>alert('You have been logged in successfuly!!');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";

                }

            } else {
                echo "<script>alert('The email or password is invalid!');</script>";
                echo "<script>window.location.href = 'Login.php';</script>";
            }

        }
        ;
    }


    public function delete($id)
    {

        $conn = $this->connection;

        $sql = "DELETE FROM regjistrimidb WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM regjistrimidb WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    function updateUser($id,$name,$surname,$email,$phone,$birthday,$password,$confirm){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?, surname=?, email=?, username=?, password=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$phone,$birthday,$password,$confirm]);

        echo "<script>alert('update was successful'); </script>";
   }

}


