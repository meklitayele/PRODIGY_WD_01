<?php
$servername = "localhost";
$username = "root";
$password = "27302223Leah*";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $email = $_POST["Email"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $confirmPassword = $_POST["confirm"];
    $agreement = isset($_POST["agreement"]) ? 1 : 0;
    $errors = array();

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 4) {
        $errors[] = "Username must be at least 4 characters long.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    if ($agreement != 1) {
        $errors[] = "You must agree to the terms of service and privacy policy.";
    }

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, username, password, agreement_accepted)
                VALUES ('$email', '$username', '$hashedPassword', $agreement)";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="styles/login.css" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/signup.css" />
  </head>
  <header>
    <div class="logo">
      <div>
        <img
          class="EthLogo"
          src="../images/logo-transparent-png.png"
          alt="EthiopiaLogo"
        />
      </div>
    </div>
  </header>
  <body>
    <div class="wrapper">
      <h1>Signup</h1>
      <form action='$_SERVER[PHP_SELF]' method = 'post'>
        <input id="Email" type="email" name="Email" placeholder="Enter your email" />
        <input id="Username" name="Username" type="text" placeholder="Create Username" />
        <input id="Password" name="Password"  type="Password" placeholder="Create Password" />
        <input id="confirm" name="confirm" type="Password" placeholder="Confirm Password" />
        <br />
      </form>
      <input type="checkbox" id="agreement" />
      <label for="agreement"
        >I have read and agreed to the
        <a href="" style="color: #5c2c00">Term of service </a> and
        <a href="" style="color: #5c2c00">Privacy policy</a>.</label
      >
      <button class="btn" type="submit">Sign up</button>

      <div class="login">
        <h3>Already have an account?<a href="login.html">Login</a></h3>
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
