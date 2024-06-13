<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("conn failed: " . $conn->connect_error);
}

$hotel_name = isset($_GET['hotel_name']) ? $conn->real_escape_string($_GET['hotel_name']) : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOTELS</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/styleHotel2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:wght@800&display=swap" rel="stylesheet" />
</head>
<header>
    <div class="logo">
        <img src="images/logo-transparent-png.png" alt="logo" class="logos" />
    </div>
    <nav class="navBar">
        <div class="navDiv">
            <ul>
                <li class="home"><a href="../homepage.html">HOME</a></li>
                <li class="city"><a href="index.html">ADDIS ABABA</a></li>
                <li><a href="placestovisit.html">PLACES TO VISIT</a></li>
                <li><a href="experiences.html">EXPERIENCES</a></li>
                <li><a href="hotels2.php">HOTELS</a></li>
                <li><a href="map.html">MAP</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
    </nav>
</header>

<body style="background-color: #F5F1E8;">
    <div class="PlacesContainer">
        <h1><?php echo "Reviews for $hotel_name"; ?></h1>


    </div>
</body>

</html>
<?php
if ($hotel_name) {
    $sql = "
        SELECT
            h.HotelName,
            r.review_text,
            r.review_rating,
            r.review_date
        FROM hotelTable h
        JOIN hotel_reviews r ON h.HotelID = r.hotel_id
        JOIN citytable c ON h.CityID = c.CityID
        WHERE c.CityName = 'Addis Ababa' AND h.HotelName = '$hotel_name'
        ORDER BY r.review_date DESC;
    ";

    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "<div style='margin-bottom: 20px;'>";
            echo "<hr>";
            echo "<em>Review: {$row['review_text']}</em><br>";
            echo "<em>Review Date: {$row['review_date']}</em><br>";
            echo "<em>Rating: {$row['review_rating']}</em><br>";
            echo "</div>";
            echo "<hr>";
        }

        $result->free();
    } else {
        echo "No reviews found for $hotel_name.";
    }
} else {
    echo "No hotel name specified.";
}

$conn->close();
?>