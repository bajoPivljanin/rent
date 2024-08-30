<?php 
class City{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function create_city($name,$state_id){
        $sql = "INSERT INTO city (name,state_id) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("si",$name,$state_id);
        $result = $stmt->execute();

    }
    public function fetch_all(){
        $sql = "SELECT * FROM city";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}