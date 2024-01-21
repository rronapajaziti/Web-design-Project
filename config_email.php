<?php
class DatabaseEmail{
    private $server = 'localhost';
    private $username = 'root';
    private $password="";
    private $database = 'travelagency';
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo 'Connection Failed' .$e->getMessage();
        }       
    }


public function insert(){
    if(isset($_POST['submit'])){

        $email = $_POST['email']; 
        
       

        $query = "INSERT INTO travel_email(email) VALUES ('$email')";
        if ($sql = $this->conn->query($query)) {

            echo "<script>alert('Thank you for contacting us. We will inform you ASAP!');</script>";
            echo "<script>window.location.href = 'index2.php';</script>";
        }

    else{
        echo "<script>alert('You have not been registered yet');</script>";
        echo "<script>window.location.href = 'register.php';</script>";
         }
    }
  }

public function check(){
    
    if(isset($_POST['submit'])){

        
        $email = $_POST['email']; 
        
     
        $select = "SELECT * FROM travel_register WHERE email = '$email' ";
     
        $result = mysqli_query($this->conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $row = mysqli_fetch_array($result);
     
           if($row['email'] == $email){
            
            echo "<script>alert('Thank you for contacting us. We will inform you ASAP!');</script>";
            echo "<script>window.location.href = 'index2.php';</script>";
            $this->insert();
           }
          
        }
        else{
            echo "<script>alert('The email is invalid. Go register first please!');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
        }
     
     };
 }

//  public function check2(){ //dashboard
    
//     if(isset($_POST['submit'])){

        
//         $email = $_POST['email']; 
        
     
//         $select = "SELECT * FROM travel_register WHERE email = '$email' ";
     
//         $result = mysqli_query($this->conn, $select);
     
//         if(mysqli_num_rows($result) > 0){
     
//            $row = mysqli_fetch_array($result);
     
//            if($row['email'] == $email){
            
//             echo "<script>alert('Contact Form has been updated successfully!!');</script>";
//             echo "<script>window.location.href = 'contactDashboard.php';</script>";
//             $this->insert();
//            }
          
//         }
//         else{
//             echo "<script>alert('The email is invalid. Go register first please!');</script>";
//             echo "<script>window.location.href = 'userDashboard.php';</script>";
//         }
     
//      };
//  }

 public function fetch(){
    $data = null;
    $query = "SELECT * FROM travel_email";
    if ($sql = $this->conn->query($query)) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
    }
    return $data;
}



public function delete($id){

    $query = "DELETE FROM travel_email where id = '$id'";
    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}

public function edit($id){

    $data = null;

    $query = "SELECT * FROM travel_email WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
        while($row = $sql->fetch_assoc()){
            $data = $row;
        }
    }
    return $data;
}

public function update($data){
    
    $query = "UPDATE travel_email SET email='$data[email]'";

    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}
}
?>