<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "27302223Leah*";
$database = "travel";

// Establish a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirm']);
    
    // Check if passwords match
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";
        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            $error = "Sign up successful"
            exit();
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="styles/login.css"> -->
    <link href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap" rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="styles/login.css"> -->
    <link href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap" rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/signup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <div class="logo">
        <div>
            <img class="EthLogo" src="../images/logo-transparent-png.png" alt="EthiopiaLogo" />
        </div>
        <div>
            <img class="EthLogo" src="../images/logo-transparent-png.png" alt="EthiopiaLogo" />
        </div>
    </div>
</header>
<div class="wrapper">
    <h1>Signup</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input id="email" type="email" name="email" placeholder="Enter your email" required>
            <input id="username" type="text" name="username" placeholder="Create Username" required>
            <input id="password" type="password" name="password" placeholder="Create Password" required>
            <input id="confirm" type="password" name="confirm" placeholder="Confirm Password" required>
            <br />
            <input type="checkbox" id="agreement" required>
            <label for="agreement">I have read and agreed to the <a href="#" style="color: #5c2c00">Term of service</a> and <a href="#" style="color: #5c2c00">Privacy policy</a>.</label>
            <button class="btn" type="submit">Sign up</button>
        </form>
        <div class="login">
            <h3>Already have an account?<a href="login.html">Login</a></h3>
        </div>
        <?php if(isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
</div>
<footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-google-plus"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
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
        <div class="socialIcons">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-google-plus"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
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
        <p> Copyright &copy; 2024; Designed by <span class="designer">YeKolo Coders</span> </p>
        <p> Copyright &copy; 2024; Designed by <span class="designer">YeKolo Coders</span> </p>
    </div>
</footer>
</body>
</footer>
</body>
</html>
