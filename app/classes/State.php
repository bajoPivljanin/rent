<?php 
class State{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function create_state($name){
        $sql = "INSERT INTO state (name) VALUES (?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("s",$name);
        $result = $stmt->execute();

    }
    public function fetch_all(){
        $sql = "SELECT * FROM state";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}