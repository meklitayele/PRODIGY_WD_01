<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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