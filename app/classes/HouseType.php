<?php 
class HouseType{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function create_type($name){
        $sql = "INSERT INTO house_type (name) VALUES (?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("s",$name);
        $result = $stmt->execute();

    }
    public function fetch_all(){
        $sql = "SELECT * FROM house_type";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}