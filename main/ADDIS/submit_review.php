<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $hotel_id = $_POST["hotel_id"];
    $review_text = $_POST["review_text"];
    $review_rating = $_POST["review_rating"];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO hotel_reviews (hotel_id, review_text, review_rating, review_date)
            VALUES (?, ?, ?, CURRENT_DATE())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $hotel_id, $review_text, $review_rating);

    if ($stmt->execute()) {
        // Review submitted successfully
        echo "Review submitted successfully!";
    } else {
        // Error submitting the review
        echo "Error submitting review: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Review</title>
    <style>
        /* CSS styles for the review form */
        /* (similar to the previous example) */
    </style>
</head>
<body>
    <h1>Leave a Review</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="hidden" name="hotel_id" value="123"> <!-- Replace with actual hotel ID -->
        <div>
            <label for="review_text">Review:</label>
            <textarea name="review_text" id="review_text" rows="5" required></textarea>
        </div>
        <div class="rating">
            <input type="radio" id="star5" name="review_rating" value="5" />
            <label for="star5">5 stars</label>
            <input type="radio" id="star4" name="review_rating" value="4" />
            <label for="star4">4 stars</label>
            <input type="radio" id="star3" name="review_rating" value="3" />
            <label for="star3">3 stars</label>
            <input type="radio" id="star2" name="review_rating" value="2" />
            <label for="star2">2 stars</label>
            <input type="radio" id="star1" name="review_rating" value="1" />
            <label for="star1">1 star</label>
        </div>
        <button type="submit">Submit Review</button>
    </form>
</body>
</html>