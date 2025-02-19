<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "traveldb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE (username = '$usernameOrEmail' OR email = '$usernameOrEmail') AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION["username"] = $usernameOrEmail;
        header("Location: homepage.html");
        exit();
    } else {
        $error = "Invalid username/email or password";
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
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username_or_email" placeholder="Username or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <?php if(isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
            <input type="submit" value="Login" class="btn"/>
        </form>
        <div class="signup">
            <h3>Don't have an account?<a href="signup.php">Signup</a></h3>
        </div>
  
  </body>
 
</html>
