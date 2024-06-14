<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "Kacho123+";
$dbname = "traveldb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    $package_id = $_SESSION['package'][0];
    $sql = "SELECT * FROM packages WHERE id = $package_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $package_price = $row["price"];
    } else {
        echo "Error: Package not found.";
        exit;
    }



?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
    .input-wrapper {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .input-wrapper label {
        margin-right: 10px;
    }

    .input-wrapper input,
    .input-wrapper select {
        width: 150px;
        padding: 5px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
</style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Package Booking</title>

    <link rel="stylesheet" href="./Packages/style/placestovisit.css" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  


  <body>
    <header>
      <div class="logo">
        <img
          class="EthLogo"
          src="images/logo-transparent-png.png"
          alt="EthiopiaLogo"
        />
      </div>

      <nav class="navBar">
        <div class="navDiv">
          <ul>
            <li class="home"><a href="homepage.html">HOME</a></li>
            <li><a href="map.html" target="_blank">MAP</a></li>
            <li><a href="contact.html" target="_blank">CONTACT</a></li>
          </ul>
        </div>
      </nav>
    </header>

<body >
    
    <div style ="margin : 1rem; height:40rem; width:50rem; display :flex; flex-direction: column; border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);background-color:beige; gap:4rem;" class = "input-wrapper">
    <h1>Package Booking</h1>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?package_id=" . $package_id; ?>">
       <div style="display:flex ; flex-direction: column;gap:1rem;"> 
        <label for="num_people">Number of People:</label>
        <input type="number" id="num_people" name="num_people" required>

        <label for="transportation">Transportation:</label>
        <select id="transportation" name="transportation" required>
            <option value="">Select transportation</option>
            <option value="car">Car</option>
            <option value="bus">Bus</option>
            <option value="train">Train</option>
        </select>

        <label for="start_date">Start Date:</label>
<select id="start_date" name="start_date" required>
  <option value="">Select start date</option>
  <option value="<?php echo date('Y-m-d',strtotime('+10 day')); ?>"><?php echo date('Y-m-d',strtotime('+10 day')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+30 day')); ?>"><?php echo date('Y-m-d', strtotime('+30 day')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+50 days')); ?>"><?php echo date('Y-m-d', strtotime('+50 days')); ?></option>
</select>

<label for="end_date">End Date:</label>
<select id="end_date" name="end_date" required>
  <option value="">Select end date</option>
  <option value="<?php echo date('Y-m-d',strtotime('+15 day')); ?>"><?php echo date('Y-m-d',strtotime('+15 day')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+45 day')); ?>"><?php echo date('Y-m-d', strtotime('+45 day')); ?></option>
  <option value="<?php echo date('Y-m-d', strtotime('+50 days')); ?>"><?php echo date('Y-m-d', strtotime('+50 days')); ?></option>
</select>
        

        <input type="submit" name="submit" value="Calculate Price">
       </div>
    </form>
    <div>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_people = $_POST["num_people"];
    $transportation = $_POST["transportation"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    
    $start = new DateTime($start_date);
    $end = new DateTime($end_date);
    $interval = $start->diff($end);
    $num_days = $interval->days;

    
    $total_price = $package_price * $num_people * $num_days;


    echo "<p>Total Price: $" . number_format($total_price, 2) . "</p>";
    echo "<a href='payment.php?total_price=" . $total_price . "'>Pay Now</a>";
}?></div>
</div>
</body><footer>
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
