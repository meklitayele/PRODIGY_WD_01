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
    <link rel="stylesheet" href="../JIMMA/styles/styleHotel2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:wght@800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="logo">
        <img class="EthLogo" src="images/logo-png.png" alt="EthiopiaLogo" />
      </div>
      <nav class="navBar">
        <div class="navDiv">
          <ul>
            <li class="home"><a href="../homepage.html">HOME</a></li>
            <li class="city"><a href="index.html">JIMMA</a></li>
            <li><a href="placestovisit.html">PLACES TO VISIT</a></li>
            <li><a href="experiences.html">EXPERIENCES</a></li>
            <li><a href="hotels.html">HOTELS</a></li>
            <li><a href="map.html">MAP</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div>
      <div class="PlacesContainer">
        <h1>HOTELS</h1>
      </div>
      <div class="hotel-display">
        <div class="hotel-image">
        <a href="https://ethiobinary.com/centraljimma/" target="_blank"
>
          <img src="images/jimmac1.jpg" alt="Hotel Image" />
          </a>
        </div>
        <div class="hotel-details">
        <a href="https://ethiobinary.com/centraljimma/" target="_blank"
>
          <h2 class="hotel-name">  
          Central Jimma Hotel </h2>     
          <p class="hotel-description">
  
            Central Jimma Hotel is a three star hotel, located close to the
            commercial center of the city. The hotel facility consists of bar,
            restaurant, swimming pool, and beautiful garden to sit and relax. It
            is one of the best recommended hotel by most visitors. Our service
            is personal and sincere, offering a luxury experience from the
            moment you touchdown in Jimma, Ethiopia.
          </p>
          <div class="services">
            <h3>Services</h3>
            <ul>
              <li>Free Wi-Fi</li>
              <li>Swimming Pool</li>
              <li>Spa and Wellness Center</li>
              <li>Restaurant and Bar</li>
              <li>24-hour Room Service</li>
            </ul>
            </a>
          </div>
          <div class="rating">
          <span class="rating-label">Rating:</span>
          <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        </div>
        </div>
      </div>
      <div class="under">
        
      <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="7"> 
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
    WHERE c.city_name = 'Jimma' AND h.hotel_name = 'Central Jimma Hotel'
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
          <a href="https://www.awetugrandhotel.com/" target="_blank"
>
          <img src="images/awetu out side.jpg" alt="Hotel Image" />
          </a>
        </div>
        <div class="hotel-details">
          <a href="https://www.awetugrandhotel.com/" target="_blank"
>
          <h2 class="hotel-name">Awetu Hotel</h2>
          <p class="hotel-description">
            Awetu Hotel is a three star hotel, located close to the commercial
            center of the city. The hotel facility consists of bar, restaurant,
            swimming pool, and beautiful garden to sit and relax. It is one of
            the best recommended hotel by most visitors. Our service is personal
            and sincere, offering a luxury experience from the moment you
            touchdown in Jimma, Ethiopia.
          </p>
          <div class="services">
            <h3>Services</h3>
            <ul>
              <li>Free Wi-Fi</li>
              <li>Swimming Pool</li>
              <li>Spa and Wellness Center</li>
              <li>Restaurant and Bar</li>
              <li>24-hour Room Service</li>
            </ul>
            </a>
          </div>
          <div class="rating">
          <span class="rating-label">Rating:</span>
          <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        </div>
        </div>
      </div>
      <div class="under">
          
      <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="8"> 
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
    WHERE c.city_name = 'Jimma' AND h.hotel_name = 'Awetu Hotel'
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
          <a href="https://ethiobinary.com/centraljimma/" target="_blank"
>
          <img src=".\images\dololo.jpg " alt="Hotel Image" />
          </a>
        </div>
        <div class="hotel-details">
           <a href="https://ethiobinary.com/centraljimma/" target="_blank"
>
          <h2 class="hotel-name">Central Jimma Hotel</h2>
          <p class="hotel-description">
            Central Jimma Hotel is a three star hotel, located close to the
            commercial center of the city. The hotel facility consists of bar,
            restaurant, swimming pool, and beautiful garden to sit and relax. It
            is one of the best recommended hotel by most visitors. Our service
            is personal and sincere, offering a luxury experience from the
            moment you touchdown in Jimma, Ethiopia.
          </p>
          <div class="services">
            <h3>Services</h3>
            <ul>
              <li>Free Wi-Fi</li>
              <li>Swimming Pool</li>
              <li>Spa and Wellness Center</li>
              <li>Restaurant and Bar</li>
              <li>24-hour Room Service</li>
            </ul>
            </a>
          </div>
          <div class="rating">
          <span class="rating-label">Rating:</span>
          <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        </div>
        </div>
      </div>
      <div class="under">
       
      <h3>Leave a Review</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="hidden" name="hotel_id" value="9"> 
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
    WHERE c.city_name = 'Jimma' AND h.hotel_name = 'Central Jimma Hotels'
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
        } .hidden{
    display: none;
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
