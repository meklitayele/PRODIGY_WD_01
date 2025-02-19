<?php
$servername = "localhost";
$username = "root";
$password = "27302223Leah*";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTELS</title>
 
  <link rel ="stylesheet" href = "../css/styleHotel2.css">

 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:wght@800&display=swap"
    rel="stylesheet">
</head>
  <header>
  <div class="logo">
      <img src="../images/logo-transparent-png.png" alt="logo" class="logos" >
    </div>
  
  <nav class="navBar">
    
  <div class="navDiv">
    
    <ul>
      <li class="home"><a href="">HOME</a></li>
      <li class="city"><a href="index.html">GONDER</a></li>
      <li><a href="placetovisit.html">PLACES TO VISIT</a></li>
      <li><a href="Experiance.html">EXPERIENCES</a></li>
      <li><a href="hotel.html">HOTELS</a></li>
      <li><a href="map.html">MAP</a></li>
      <li><a href="contact.html">CONTACT</a></li>
    </ul>
  </div>
  </nav>
</header>
<body>

<div>
   <div class="PlacesContainer">
        <h1>HOTELS</h1>
    </div>
<div class="hotel-display">
  <a href="https://www.bing.com/ck/a?!&&p=8dde5288bd67de28JmltdHM9MTcwNTI3NjgwMCZpZ3VpZD0yOWQyZTY4ZC1hODZlLTZmMjgtMjM3OS1mNDhlYWM2ZTY5YzcmaW5zaWQ9NTQ2Nw&ptn=3&ver=2&hsh=3&fclid=29d2e68d-a86e-6f28-2379-f48eac6e69c7&psq=doho+lodge&u=a1aHR0cHM6Ly9kb2hvbG9kZ2UuY29tLw&ntb=1" target="_blank">
    <div class="hotel-image">
      <img src="../images/goha.jpg" alt="Hotel Image">
    </div>
    <div class="hotel-details">
      <h2 class="hotel-name">Goha lodge</h2>
      <p class="hotel-description">Goha Hotel is a well-known hotel located in Gonder, Ethiopia. It is situated in the heart of the city and offers comfortable accommodations to both tourists and business travelers. The hotel is known for its traditional Ethiopian architecture and beautifully landscaped gardens, providing a serene and welcoming atmosphere for guests.</p>
    <div class="services">
        <h3>Services</h3>
        <ul>
          <li>Free Wi-Fi</li>
          <li>Spa and Wellness Center</li>
          <li>Restaurant and Bar</li>
          <li>24-hour Room Service</li>
          <li>parking</li>
        </ul>
    </div>
</div>
</a>
<div class="rating">
  <span class="rating-label">Rating:</span>
  <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
</div>
</div>
<div class = "under">
<h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="6"> 
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
    <?php
    $sql = "
    SELECT
        h.hotel_name,
        r.review_text,
        r.review_rating,
        r.review_date
    FROM hotels h
    JOIN hotel_reviews r ON h.hotel_id = r.hotel_id
    JOIN cities c ON h.city_id = c.city_id
    WHERE c.city_name = 'Gonder' AND h.hotel_name = 'Goha Lodge'
    ORDER BY r.review_date DESC;
    ";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p> Review: " . $row["review_text"] . "</p>";
            echo "<p>Rating: " . $row["review_rating"] . " / 5.0</p>";
            echo "<p>Review Date: " . $row["review_date"] . "</p>";
            echo "<hr>";
            echo "<br/>";

        }
    } else {
        echo "No reviews found.";
    }
    ?>
      
      <div class="visit-hotel">
        <a
            href="../Hotels/reservation.php"
            >Make a reservation</a>
      </div>
    </div>
    <div class="hotel-display">
      <a href="https://www.bing.com/ck/a?!&&p=0280f0729f3ba398JmltdHM9MTcwNTI3NjgwMCZpZ3VpZD0yOWQyZTY4ZC1hODZlLTZmMjgtMjM3OS1mNDhlYWM2ZTY5YzcmaW5zaWQ9NTE4OQ&ptn=3&ver=2&hsh=3&fclid=29d2e68d-a86e-6f28-2379-f48eac6e69c7&psq=kuriftu+resort+%26+spa+awash+falls&u=a1aHR0cHM6Ly93d3cua3VyaWZ0dXJlc29ydHMuY29tL2F3YXNoLw&ntb=1" target="_blank">  

        <div class="hotel-image">
          <img src="../images/ag.jpg" alt="Hotel Image">
        </div>
        <div class="hotel-details">
          <h2 class="hotel-name">AG Hotel Gonder </h2>
          <p class="hotel-description" >is a well-known hotel located in the city of Gonder
            ,which is situated in the heart of Gonder, making it convenient for exploring the city's attractions.
             It is typically located within close proximity to popular landmarks, restaurants, and shops.</p>
        <div class="services">
            <h3>Services</h3>
            <ul>
              <li>Free Wi-Fi</li>
              <li>Room Service</li>
              <li>Spa and Wellness Center</li>
              <li>Restaurant and Bar</li>
              <li>parking</li>
            </ul>
        </div>
    </div>
  </a>
  <div class="rating">
    <span class="rating-label">Rating:</span>
    <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
  </div>
    </div>
    <div class = "under">
    <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="5"> 
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
    <?php
    $sql = "
    SELECT
        h.hotel_name,
        r.review_text,
        r.review_rating,
        r.review_date
    FROM hotels h
    JOIN hotel_reviews r ON h.hotel_id = r.hotel_id
    JOIN cities c ON h.city_id = c.city_id
    WHERE c.city_name = 'Gonder' AND h.hotel_name = 'AG Hotel Gonder'
    ORDER BY r.review_date DESC;
    ";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p> Review: " . $row["review_text"] . "</p>";
            echo "<p>Rating: " . $row["review_rating"] . " / 5.0</p>";
            echo "<p>Review Date: " . $row["review_date"] . "</p>";
            echo "<hr>";
            echo "<br/>";

        }
    } else {
        echo "No reviews found.";
    }
    ?>
          
          <div class="visit-hotel">
            <a
            href="../Hotels/reservation.php"
            >Make a reservation</a>
          </div>
        </div>
        <div class="hotel-display">
          <a href="https://www.hyatt.com/en-US/hotel/ethiopia/hyatt-regency-addis-ababa/addra" target="_blank">
            <div class="hotel-image">

              <img src="../images/flor.jpg" alt="Hotel Image">
            </div>
            <div class="hotel-details">
              
              <h2 class="hotel-name">Florida International Hotel</h2>
              <p class="hotel-description">Located near the center of Gonder, this hotel offers comfortable accommodations, an on-site restaurant, and a bar. It is within walking distance of popular attractions such as Fasil Ghebbi (Royal Enclosure).</p>
            <div class="services">
                <h3>Services</h3>
                <ul>
                  <li>Free Wi-Fi</li>
                  <li>24-hour Room Service</li>
                  <li>Spa and Wellness Center</li>
                  <li>Restaurant and Bar</li>
                  <li>parking</li>
                  
                </ul>
            </div>
        </div>
          </a>
          <div class="rating">
            <span class="rating-label">Rating:</span>
            <span class="stars">&#9733;&#9733;&#9733;</span>
          </div>
        </div>
        <div class = "under">
        <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="4"> 
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

    <?php
    $sql = "
    SELECT
        h.hotel_name,
        r.review_text,
        r.review_rating,
        r.review_date
    FROM hotels h
    JOIN hotel_reviews r ON h.hotel_id = r.hotel_id
    JOIN cities c ON h.city_id = c.city_id
    WHERE c.city_name = 'Gonder' AND h.hotel_name = 'Florida International Hotel'
    ORDER BY r.review_date DESC;
    ";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p> Review: " . $row["review_text"] . "</p>";
            echo "<p>Rating: " . $row["review_rating"] . " / 5.0</p>";
            echo "<p>Review Date: " . $row["review_date"] . "</p>";
            echo "<hr>";
            echo "<br/>";

        }
    } else {
        echo "No reviews found.";
    }
    ?>         
              <div class="visit-hotel">
                <a
            href="../Hotels/reservation.php"
            >Make a reservation</a>
              </div>
            </div>
            <div>

            </div>
  </div>
    
</body>
<style>
  .review{
  display: flex;
  flex-direction: row;
  gap: 2px;
  padding-top:2px;
  align-content: center;
 }
   a{
  text-decoration: none;
  color: #2d1e18;
}
.hidden{
    display: none;
  }
.rating {
            display: flex;
            flex-direction: row-reverse;
            unicode-bidi: bidi-override;
            direction: rtl;
        }
        .rating > input {
            display: none;
        }
        .rating > label {
            display: inline-block;
            font-size: .9rem;            
            cursor: pointer;
            color: #ccc;
        }
        .rating > label:before {
            content: "★";
            color: #ccc;
        }
        .rating > input:checked ~ label:before,
        .rating > input:checked ~ label ~ label:before {
            color: #fc0;
        }

.rating-label{
  color: #2d1e18;
}
.review-textarea{
  padding: 2px;
  margin-top: 4px;
}
.review-text{
  margin-bottom: 2px;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "27302223Leah*";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $hotel_id = (int) $_POST["hotel_id"];
  $review_text = $_POST["review_text"];
  if(isset($_POST["review_rating"])){
  $review_rating = (int)$_POST["review_rating"];
  }
  $review_id =  $hotel_id . "-" . time();
  $review_date = date('Y-m-d H:i:s');

  $sql = "INSERT INTO hotel_reviews (review_id, hotel_id, review_text, review_rating, review_date)
          VALUES (?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sisis", $review_id, $hotel_id, $review_text, $review_rating, $review_date);

  if ($stmt->execute()) {
    echo "Review submitted successfully!";
  } else {
      echo "Error submitting review: " . $stmt->error;
  }

  $stmt->close();
}

?>