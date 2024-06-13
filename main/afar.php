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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_people = $_POST["num_people"];
    $transportation = $_POST["transportation"];


    $total_price = $package_price * $num_people;

    echo "<p>Total Price: $" . number_format($total_price, 2) . "</p>";
    echo "<a href='payment.php?total_price=" . $total_price . "'>Pay Now</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Package Booking</title>
</head>
<body>
    <h1>Package Booking</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?package_id=" . $package_id; ?>">
        <label for="num_people">Number of People:</label>
        <input type="number" id="num_people" name="num_people" required>

        <label for="transportation">Transportation:</label>
        <select id="transportation" name="transportation" required>
            <option value="">Select transportation</option>
            <option value="car">Car</option>
            <option value="bus">Bus</option>
            <option value="train">Train</option>
        </select>

        <input type="submit" name="submit" value="Calculate Price">
    </form>
</body>
</html>