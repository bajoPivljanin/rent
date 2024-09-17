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
    public function get_cities_from_state($state_id){
        $sql = "SELECT * from city WHERE state_id = ?";
        $result = $this->conn->prepare($sql);
        $result->bind_param("i",$state_id);
        $result->execute();
        $rez = $result->get_result();
    }
}