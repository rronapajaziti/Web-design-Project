<?php
class DatabaseRezervo{
    private $server = 'localhost';
    private $username = 'root';
    private $password="";
    private $database ='travelagency';
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
            $flying_from = $_POST['flying_from'];
            $flying_to = $_POST['flying_to'];
            $departing = $_POST['departing'];
            $returning = $_POST['returning'];
            $adults = $_POST['adults'];
            $children = $_POST['children'];
            $name = $_POST['name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $images = isset($_POST['images']) ? $_POST['images'] : '';
            $travel = $_POST['travel'];
    
            $query = "INSERT INTO travel_rezervo (`flying_from`, `flying_to`, `departing`, `returning`, `adults`, `children`, `name`, `last_name`, `email`, `images`, `travel`) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("sssssssssss", $flying_from, $flying_to, $departing, $returning, $adults, $children, $name, $last_name, $email, $images, $travel);
    
            if ($stmt->execute()) {
                echo "<script>alert('Thank you for your reservation!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                echo "Error: " . $stmt->error;
                echo "<script>alert('Error in reservation.');</script>";
                echo "<script>window.location.href = 'register.php';</script>";
            }
    
            $stmt->close();
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
            
            echo "<script>alert('Thank you for your rezervation!');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
            $this->insert();
           }
          
        }
        else{
            echo "<script>alert('The email is invalid. Go register first please!');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
        }
     
     };
 }

 public function check2(){
    
    if(isset($_POST['submit'])){

        
        $email = $_POST['email']; 
        
     
        $select = "SELECT * FROM travel_register WHERE email = '$email' ";
     
        $result = mysqli_query($this->conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $row = mysqli_fetch_array($result);
     
           if($row['email'] == $email){
            
            echo "<script>alert('Thank you for your rezervation!');</script>";
            echo "<script>window.location.href = 'rezervationDashboard.php';</script>";
            $this->insert();
           }
          
        }
        else{
            echo "<script>alert('The email is invalid. Go register first please!');</script>";
            echo "<script>window.location.href = 'userDashboard.php';</script>";
        }
     
     };
 }

 public function fetch(){
    $data = null;
    $query = "SELECT * FROM travel_rezervo";
    if ($sql = $this->conn->query($query)) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
    }
    return $data;
}



public function delete($id){

    $query = "DELETE FROM travel_rezervo where id = '$id'";
    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}

public function edit($id){

    $data = null;

    $query = "SELECT * FROM travel_rezervo WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
        while($row = $sql->fetch_assoc()){
            $data = $row;
        }
    }
    return $data;
}

public function update($data){
    $query = "UPDATE travel_rezervo SET 
    flying_from='$data[flying_from]', flying_to='$data[flying_to]', departing='$data[departing]', returning='$data[returning]',   adults='$data[adults]', children ='$data[children]',   name ='$data[name]', last_name ='$data[last_name]', email ='$data[email]', images ='$data[images]', travel ='$data[travel]' WHERE id='$data[id]'";

    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}
}
?>