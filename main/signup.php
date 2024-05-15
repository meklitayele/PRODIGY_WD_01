<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    $errors = array(
        'email' => '',
        'username' => '',
        'password' => '',
        'confirmPassword' => '',
        'agreement' => ''
    );

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($username)) {
        $errors['username'] = "Username is required.";
    } elseif (strlen($username) < 4) {
        $errors['username'] = "Username must be at least 4 characters long.";
    }

    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif ($password !== $confirmPassword) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    if ($agreement != 1) {
        $errors['agreement'] = "You must agree to the terms of service and privacy policy.";
    }

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, username, password, agreement_accepted)
                VALUES (?, ?, ?, ?);";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $email, $username, $hashedPassword, $agreement);

        if ($stmt->execute() === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="styles/login.css"> -->
    <link href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap" rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/signup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <div class="logo">
        <div>
            <img class="EthLogo" src="../images/logo-transparent-png.png" alt="EthiopiaLogo" />
        </div>
    </div>
</header>
<div class="wrapper">
    <h1>Signup</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <input id="Email" type="email" name="Email" placeholder="Enter your email" />
            <?php if (isset($errors['email'])) { ?><span class="error"><?php echo $errors['email']; ?></span><?php } ?>
        </div>
        <div>
            <input id="Username" name="Username" type="text" placeholder="Create Username" />
            <?php if (isset($errors['username'])) { ?><span class="error"><?php echo $errors['username']; ?></span><?php } ?>
        </div>
        <div>
            <input id="Password" name="Password" type="Password" placeholder="Create Password" />
            <?php if (isset($errors['password'])) { ?><span class="error"><?php echo $errors['password']; ?></span><?php } ?>
        </div>
        <div>
            <input id="confirm" name="confirm" type="Password" placeholder="Confirm Password" />
            <?php if (isset($errors['confirmPassword'])) { ?><span class="error"><?php echo $errors['confirmPassword']; ?></span><?php } ?>
        </div>
        <br />
        <div>
            <input type="checkbox" id="agreement" name="agreement" />
            <label for="agreement"> I have read and agreed to the <a href="" style="color: #5c2c00">Term of service </a> and <a href="" style="color: #5c2c00">Privacy policy</a>. </label>
            <?php if (isset($errors['agreement'])) { ?><br/><span class="error"><?php echo $errors['agreement']; ?></span><?php } ?>
        </div>
        <input type="submit" value="Sign up">
    </form>
    <div class="login">
        <h3>Already have an account?<a href="login.html">Login</a></h3>
    </div>
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
    </div>
    <div class="footerBottom">
        <p> Copyright &copy; 2024; Designed by <span class="designer">YeKolo Coders</span> </p>
    </div>
</footer>
</body>
</html>
