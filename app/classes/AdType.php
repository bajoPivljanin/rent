<?php 
class AdType{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function create_ad_type($ad_name,$ad_price,$ad_description){
        $sql = "INSERT INTO ad_type (ad_name,ad_price,ad_description) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("sss",$ad_name,$ad_price,$ad_description);
        $result = $stmt->execute();
    }
    public function fetch_all(){
        $sql = "SELECT * FROM ad_type";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}