<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "27302223Leah*";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("Location: homepage.html");
            exit;
        } else {
            $error_message = "Invalid username or password.";
        }
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- <link rel="stylesheet" href="styles/login.css" /> -->
    <link
      href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/login.css" />
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
      <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <!-- <?php if (isset($error_message)) { ?>
        <div class="error">
           <?php echo $error_message; ?>
        </div>
    <?php } ?> -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <?php if (isset($error_message)) { ?>
        <div class="error"><?php echo $error_message; ?></div>
    <?php } ?>
    <br><br>
        <input type="submit" value="Login">
    </form>
      <div class="signup">
        <h3>Don't have an account?<a href="signup.html">Signup</a></h3>
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
