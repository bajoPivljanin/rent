<?php 
require_once "../../app/config/config.php";
require_once "../../app/classes/State.php";
require_once "../../app/classes/City.php";

// Enable error reporting for debugging (optional)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection from config
$state = new State();
$city = new City();

if (isset($_POST['state_id'])) {
    $state_id = intval($_POST['state_id']);

    $query = "SELECT * FROM city WHERE state_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $state_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<option value="" disabled selected>Odaberi mesto, grad...</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['city_id']) . '">' . htmlspecialchars(strip_tags($row['name'])) . '</option>';
        }
    } else {
        echo '<option value="" disabled>No cities available</option>';
    }
    $stmt->close();
}

$conn->close();
?>