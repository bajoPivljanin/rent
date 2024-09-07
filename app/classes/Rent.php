<?php 
class Rent{
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }
    public function fetch_all(){
        $sql = "SELECT * FROM rent_house";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function fetch_info(){
        $sql = "SELECT rent_house.house_id,rent_house.name as house_name,house_type.name as house_type,city.name as city,state.name as state,rent_house.joined_at,rent_house.subscribed_to 
        FROM rent_house
        INNER JOIN house_type on rent_house.type_id = house_type.house_type_id
        INNER JOIN city on rent_house.city_id = city.city_id
        INNER JOIN state on rent_house.state_id = state.state_id";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function show_house($house_id){
        $sql =  "SELECT rent_house.house_id,rent_house.name as house_name,house_type.name as house_type,city.name as city,state.name as state,rent_house.phone,rent_house.price,rent_house.email,rent_house.instagram,rent_house.site_url,rent_house.site_name,rent_house.pictures,rent_house.description,rent_house.joined_at,rent_house.subscribed_to,ad_type.ad_name 
        FROM rent_house
        INNER JOIN house_type on rent_house.type_id = house_type.house_type_id
        INNER JOIN city on rent_house.city_id = city.city_id
        INNER JOIN state on rent_house.state_id = state.state_id
        INNER JOIN ad_type on rent_house.ad_type_id = ad_type.ad_type_id
        WHERE rent_house.house_id = ?";
        $result = $this->conn->prepare($sql);
        $result->bind_param("i",$house_id);
        $result->execute();
        $rez = $result->get_result();
        return $rez->fetch_assoc();
    }
    public function create($name,$type_id,$city_id,$state_id,$phone,$price,$email,$instagram,$site_url,$site_name,$pictures,$description,$subscribed_to,$ad_type_id){
        $sql = "INSERT INTO rent_house (name,type_id,city_id,state_id,phone,price,email,instagram,site_url,site_name,pictures,description,subscribed_to,ad_type_id) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("siiissssssssdi",$name,$type_id,$city_id,$state_id,$phone,$price,$email,$instagram,$site_url,$site_name,$pictures,$description,$subscribed_to,$ad_type_id);
        $result = $stmt->execute();
    }
    
}