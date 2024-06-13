
<?php
$servername = "localhost";
$username = "root";
$password = "Kacho123+";
$dbname = "hoteldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['package_id'])) {
    $package_id = $_GET['package_id'];
    $sql = "SELECT * FROM packages WHERE id = $package_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $package_price = $row["price"];
    } else {
        echo "Error: Package not found.";
        exit;
    }
} else {
    echo "Error: Package ID not provided.";
    exit;
}

