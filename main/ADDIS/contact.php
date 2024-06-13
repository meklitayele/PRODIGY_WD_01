<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = trim($_POST["fullname"]);
  $email = trim($_POST["email"]);
  $phone = trim($_POST["phone"]);
  $message = trim($_POST["message"]);

  if (empty($fullname) || empty($email) || empty($phone) || empty($message)) {
    $error = "All fields are required.";
  } else {
    $username = $_SESSION['username'];

    $sql = "INSERT INTO contacts (fullname, email, phone, message, username) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fullname, $email, $phone, $message, $username);

    if ($stmt->execute()) {
      $message = "Contact saved successfully!";
    } else {
      $error = "Error: " . $stmt->error;
    }

    $stmt->close();
  }

  $conn->close();
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="styles/contact.css" />
  <link href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap" rel="stylesheet" />
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="script/contact.js"></script>
</head>

<body>
  <header>
    <div class="logo">
      <div>
        <img class="EthLogo" src="images/logo-transparent-png.png" alt="EthiopiaLogo" />
      </div>
    </div>

    <nav class="navBar">
      <div class="navDiv">
        <ul>
          <li class="home"><a href="../homepage.html">HOME</a></li>
          <li class="city"><a href="index.html">ADDIS ABABA</a></li>
          <li>
            <a href="placestovisit.html" target="_blank">PLACES TO VISIT</a>
          </li>
          <li><a href="experiences.html" target="_blank">EXPERIENCES</a></li>
          <li><a href="hotels2.html" target="_blank">HOTELS</a></li>
          <li><a href="map.html" target="_blank">MAP</a></li>
          <li><a href="contact.php" target="_blank">CONTACT</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div>
    <div class="contactName">
      <h1>Contact</h1>
    </div>
    <div class="contactInfo">
      <img src="" alt="" />
      <div class="contactInfoEth">
        <h1>Experience Ethiopia</h1>
        <h3>Land of Origins</h3>
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="contactInfoName">
          <label for="Fname">Full Name</label>
          <br />
          <input type="text" id="fullName" name="fullname" />

          <br />
          <label for="Email">Email</label>
          <br />
          <input type="email" id="email" name="email" />

          <br />
          <label for="Phone">Phone Number</label>
          <br />
          <input type="text" id="phoneNumber" name="phone" />

          <br />
          <label for="message">Message</label>
          <br />
          <textarea id="message" cols="30" rows="10" name="message"></textarea>

          <br />
          <br />
          <div class="labels">
            <div><input type="checkbox" id="consent" /></div>

            <div>
              <label for="consent">I have agreed to the <a href="">Privacy Policy</a></label>
            </div>
          </div>
          <div class="Submit"><button class="Submit">Submit</button></div>
        </div>
      </form>
    </div>
  </div>
</body>
<footer>
  <div class="footerContainer">
    <div class="socialIcons">
      <a href=""> <i class="fa-brands fa-facebook"></i></a>
      <a href=""> <i class="fa-brands fa-instagram"></i></a>
      <a href=""> <i class="fa-brands fa-twitter"></i></a>
      <a href=""> <i class="fa-brands fa-google-plus"></i></a>
      <a href=""> <i class="fa-brands fa-youtube"></i></a>
    </div>
    <div class="footerNav">
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="">Our Team</a></li>
        <li><a href="">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
  <div class="footerBottom">
    <p>
      Copyright &copy; 2024; Designed by
      <span class="designer">YeKolo Coders</span>
    </p>
  </div>
</footer>

</html>