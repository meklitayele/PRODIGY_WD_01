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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOTELS</title>
    <link rel="stylesheet" href="../ARBAMINCH/styles/styleHotel2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:wght@800&display=swap"
      rel="stylesheet"
    />
  </head>

  <header>
    <div class="logo">
      <img class="EthLogo" src="images/logo-png.png" alt="EthiopiaLogo" />
    </div>
    <nav class="navBar">
      <div class="navDiv">
        <ul>
          <li class="home"><a href="../homepage.html">HOME</a></li>
          <li class="city"><a href="index.html">ARBA MINCH</a></li>
          <li>
            <a href="placestovisit.html" target="_blank">PLACES TO VISIT</a>
          </li>
          <li><a href="experiences.html" target="_blank">EXPERIENCES</a></li>
          <li><a href="hotels.html">HOTELS</a></li>
          <li><a href="map.html" target="_blank">MAP</a></li>
          <li><a href="contact.html" target="_blank">CONTACT</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <body>
    <div class="PlacesContainer">
      <h1>HOTELS</h1>
    </div>
    <div class="hotel-display">
      <div class="hotel-image">
        <img src="../ARBAMINCH/images/arbaminch-resort.jpg" alt="Hotel Image" />
      </div>
      <div class="hotel-details">
        <h2 class="hotel-name"> <a
          href="https://www.tripadvisor.com/Hotel_Review-g776853-d19256795-Reviews-Emerald_Resort-Arba_Minch_Southern_Nations_Nationalities_and_People_s_Region.html"
          target="_blank"
          >Arba Minch Resort Hotel </a></h2>
          <a
          href="https://www.tripadvisor.com/Hotel_Review-g776853-d19256795-Reviews-Emerald_Resort-Arba_Minch_Southern_Nations_Nationalities_and_People_s_Region.html"
          target="_blank"
          >
        <p class="hotel-description">
          Arba Minch Resort Hotel situated near the town center, this hotel
          provides comfortable rooms, a restaurant, a bar, and conference
          facilities. It's a convenient choice for both business and leisure
          travelers.
        </p>
        <div class="services">
          <h3>Services</h3>
          <ul>
            <li>Free Wi-Fi</li>
            <li>Parking Space</li>
          </ul>
        </div>
          </a>
      </div>
      <div class="rating">
        <span class="rating-label">Rating:</span>
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </div>
    <div class="under">
  
    <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="10"> 
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
    WHERE c.city_name = 'Arba Minch' AND h.hotel_name = 'Arba Minch Resort Hotel'
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
      <div class="hotel-image">
        <a
        href="https://hailehotelsandresorts.com/arbaminch_resort/"
        target="_blank"
        > <img
          src="../ARBAMINCH/images/haile-resort-arba-minch.jpg"
          alt="Hotel Image"
        />
        </a>
      </div>
      <div class="hotel-details">
        <a
          href="https://hailehotelsandresorts.com/arbaminch_resort/"
          target="_blank"
          >
        <h2 class="hotel-name">Haile Resort Arba Minch </h2>
        <p class="hotel-description">
          Haile-Arba Minch is a 107 room four-star resort located at a grand
          view overlooking the twin lakes of Abaya and Chamo along the beautiful
          evergreen vegetation and chain of mountains that form the most
          beautiful pattern. Haile-Arba Minch is an all-inclusive concept that
          provides five-star services to its guests.
        </p>
        <div class="services">
          <h3>Services</h3>
          <ul>
            <li>Swimming Pool</li>
            <li>Restaurant and Bar</li>
            <li>24-hour Room Service</li>
          </ul>
        </div>
      </a>
      </div>
      <div class="rating">
        <span class="rating-label">Rating:</span>
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </div>
    <div class="under">
     
    <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="11"> 
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
    WHERE c.city_name = 'Arba Minch' AND h.hotel_name = 'Haile Resort Arba Minch'
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
      <a
          href="https://www.hotels.com/ho618934080/paradise-lodge-arbaminch-arba-minch-ethiopia/?locale=en_GB&pos=HCOM_ME&recommendations-overlay=recommendations-overlay&siteid=310000033"
          target="_blank"
          >
      <div class="hotel-image">
        <img src="../ARBAMINCH/images/paradise.webp" alt="Hotel Image" />
      </div>
      <div class="hotel-details">
        <h2 class="hotel-name">Paradise Lodge Arba Minch</h2>
        <p class="hotel-description">
          This lodge offers beautiful views of Lake Chamo and the surrounding
          mountains. It features comfortable rooms with private balconies, an
          on-site restaurant, a bar, and a swimming pool.
        </p>
        <div class="services">
          <h3>Services</h3>
          <ul>
            <li>Free Wi-Fi</li>
            <li>Swimming Pool</li>
            <li>Spa and Wellness Center</li>
            <li>Restaurant and Bar</li>
            <li>Outdoor Activites</li>
          </ul>
        </div>
      </div>
      <div class="rating">
        <span class="rating-label">Rating:</span>
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
      </a>
    </div>
    <div class="under">
    <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="12"> 
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
    WHERE c.city_name = 'Arba Minch' AND h.hotel_name = 'Paradise Lodge Arba Minch'
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
  </body>
</html>
<style>
  .review{
  display: flex;
  flex-direction: row;
  gap: 2px;
  align-content: center;
 }
   a{
  text-decoration: none;
  color: #2d1e18;
}
.rating-label{
  color: #2d1e18;
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
        .hidden{
    display: none;
  }
        .rating > label:before {
            content: "★";
            color: #ccc;
        }
        .rating > input:checked ~ label:before,
        .rating > input:checked ~ label ~ label:before {
            color: #fc0;
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
