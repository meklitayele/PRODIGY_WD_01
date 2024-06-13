<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traveldb";

$conn = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOTELS</title>
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="stylesheet" href="./styles/styleHotel2.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:wght@800&display=swap" rel="stylesheet" />
</head>
<header>
  <div class="logo">
    <img src="images/logo-transparent-png.png" alt="logo" class="logos" />
  </div>
  <nav class="navBar">
    <div class="navDiv">
      <ul>
        <li class="home"><a href="../homepage.html">HOME</a></li>
        <li class="city"><a href="index.html">ADDIS ABABA</a></li>
        <li><a href="placestovisit.html">PLACES TO VISIT</a></li>
        <li><a href="experiences.html">EXPERIENCES</a></li>
        <li><a href="hotels2.php">HOTELS</a></li>
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
      <a href="https://www.hilton.com/en/hotels/addhitw-hilton-addis-ababa/?WT.mc_id=zINDA0EMEA1MB2PSH3GGL4INTBPP5dkt6MULTIBR7_121127567_1003528_p7949166987&gclsrc=3p.ds&&&&&&gclid=09383deac1d6138299d5584916ebb24c&gclsrc=3p.ds&msclkid=09383deac1d6138299d5584916ebb24c" target="_blank">
        <div class="hotel-image">
          <img src="images/hilton 2.jpg" alt="Hotel Image" />
        </div>
        <div class="hotel-details">
          <h2 class="hotel-name">Hilton Hotel</h2>
          <p class="hotel-description">
            Hilton Hotel is a five star hotel, Set within lush gardens next to
            Ethiopia Park, our urban retreat is a kilometer from the ECA
            Convention Center. We can arrange tours to sights such as St.
            George’s Cathedral and the Ethnographic Museum. We also offer a
            shuttle service to Bole International Airport, just a 20-minute ride
            away. Enjoy our mini golf course, geothermal pool, and tennis
            courts.
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
          </div>
        </div>
      </a>
      <div class="rating">
        <span class="rating-label">Rating</span>
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </div>
    <div class="under">
      <h3>Leave a Review</h3>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input class="hidden" name="hotel_id" value="2">
        <div>
          <label for="review_text">Review:</label>
          <textarea name="review_text" id="review_text" rows="5\" required></textarea>
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
        <button type="submit" style="background:#2d1e18; color:white;  padding: 8px 15px; border-radius:6px;">Submit Review</button>
      </form>
      <div class="visit-hotel">
        <a href="https://www.hilton.com/en/hotels/addhitw-hilton-addis-ababa/?WT.mc_id=zINDA0EMEA1MB2PSH3GGL4INTBPP5dkt6MULTIBR7_121127567_1003528_p7949166987&gclsrc=3p.ds&&&&&&gclid=09383deac1d6138299d5584916ebb24c&gclsrc=3p.ds&msclkid=09383deac1d6138299d5584916ebb24c" target="_blank">Visit Hotel Website</a>
        <a href="../Hotels/reservation.php">Make a reservation</a>
        <a href="view_review.php?hotel_name=Hilton Hotel" target="_blank">View Reviews</a>
      </div>


    </div>


    <div class="hotel-display">
      <a href="https://www.bing.com/aclick?ld=e8y0JlRZiBabW63uHUl_j68DVUCUwnwgoFsurQTIBHxQgx2W2w2Bwgkaz5opKaLyq0xS0ZB48TDYa7C7H-czxBp3ck2MlSVEfX6muCy1HgCNfqnIhP9VYQNGKHoetj7DcOYu6FTJ_t4kQL_qOktKSLftauiqz8N-ggxeoDTZbY4Puzh2YNHSiBronboGd_zXwTHmYABg&u=aHR0cHMlM2ElMmYlMmZ3d3cubWFycmlvdHQuY29tJTJmZGVmYXVsdC5taSUzZm5zdCUzZHBhaWQlMjZjaWQlM2RQQUlfR0xCMDAwNEZQOF9HTEUwMDBCTTZZX0dMRjAwME9QRFUlMjZwcGMlM2RwcGMlMjZwSWQlM2Rjb3JwaW1lZGlhJTI2Z2NsaWQlM2RlN2MzYzFjZjg4NTYxN2U5N2M5YWE0NmM1ZGZhZjA5NSUyNmdjbHNyYyUzZDNwLmRzJTI2&rlid=e7c3c1cf885617e97c9aa46c5dfaf095&ntb=1&ntb=1" target="_blank">
        <div class="hotel-image">
          <img src="images/sheraton.jpg" alt="Hotel Image" />
        </div>
        <div class="hotel-details">
          <h2 class="hotel-name">Sheraton Hotel</h2>
          <p class="hotel-description">
            Sheraton is a five star hotel, located close to the commercial
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
          </div>
        </div>
      </a>
      <div class="rating">
        <span class="rating-label">Rating</span>
        <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </div>
    <div class="under">

      <h3>Leave a Review</h3>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input class="hidden" name="hotel_id" value="1">
        <div>
          <label for="review_text">Review:</label>
          <textarea name="review_text" id="review_text" rows="5"></textarea>

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
        <button type="submit" style="background:#2d1e18; color:white;  padding: 8px 15px; border-radius:6px;">Submit Review</button>
      </form>
      <div class="visit-hotel">
        <a href="https://www.bing.com/aclick?ld=e8y0JlRZiBabW63uHUl_j68DVUCUwnwgoFsurQTIBHxQgx2W2w2Bwgkaz5opKaLyq0xS0ZB48TDYa7C7H-czxBp3ck2MlSVEfX6muCy1HgCNfqnIhP9VYQNGKHoetj7DcOYu6FTJ_t4kQL_qOktKSLftauiqz8N-ggxeoDTZbY4Puzh2YNHSiBronboGd_zXwTHmYABg&u=aHR0cHMlM2ElMmYlMmZ3d3cubWFycmlvdHQuY29tJTJmZGVmYXVsdC5taSUzZm5zdCUzZHBhaWQlMjZjaWQlM2RQQUlfR0xCMDAwNEZQOF9HTEUwMDBCTTZZX0dMRjAwME9QRFUlMjZwcGMlM2RwcGMlMjZwSWQlM2Rjb3JwaW1lZGlhJTI2Z2NsaWQlM2RlN2MzYzFjZjg4NTYxN2U5N2M5YWE0NmM1ZGZhZjA5NSUyNmdjbHNyYyUzZDNwLmRzJTI2&rlid=e7c3c1cf885617e97c9aa46c5dfaf095&ntb=1&ntb=1" target="_blank">Visit Hotel Website</a> <a href="../Hotels/reservation.php">Make a reservation</a>
        <a href="view_review.php?hotel_name=Sheraton Hotel" target="_blank">View Reviews</a>
      </div>
    </div>
  </div>


  <div class="hotel-display">
    <a href="https://www.hyatt.com/en-US/hotel/ethiopia/hyatt-regency-addis-ababa/addra" target="_blank">
      <div class="hotel-image">
        <img src=".\images/hayat.jpg " alt="Hotel Image" />
      </div>
      <div class="hotel-details">
        <h2 class="hotel-name">Hyat Regency</h2>
        <p class="hotel-description">
          Hyatt Regency is located just 15 minutes from Bole international
          airport, and most centrally located on Meskel Square, connecting the
          large artery roads of Addis Ababa. The hotel stands within a short
          walking distance to the United Nations Conference center and within
          a 15 min. drive to the African Union Headquarters with the largest
          conference facilities in the country.
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
        </div>
      </div>
    </a>
    <div class="rating">
      <span class="rating-label">Rating</span>
      <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    </div>
  </div>
  <div class="under">

    <!-- <div class="review">
          <label for="review-text">Write a review:</label>
          <textarea
            id="review-text"
            class="review-textarea"
            rows="4"
          ></textarea>
        </div> -->
    <h3>Leave a Review</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <input class="hidden" name="hotel_id" value="3">
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
      <button type="submit" style="background:#2d1e18; color:white;  padding: 8px 15px; border-radius:6px;">Submit Review</button>
    </form>
    <div class="visit-hotel">
      <a href="https://www.hyatt.com/en-US/hotel/ethiopia/hyatt-regency-addis-ababa/addra" target="_blank">Visit Hotel Website</a>
      <a href="../Hotels/reservation.php">Make a reservation</a>
      <a href="view_review.php?hotel_name=Hyatt Regency" target="_blank">View Reviews</a>
    </div>


  </div>
  </div>
</body>

</html>
<style>
  .hidden {
    display: none;
  }

  .review {
    display: flex;
    flex-direction: row;
    gap: 2px;
    padding-top: 2px;
    align-content: center;
  }

  a {
    text-decoration: none;
    color: #2d1e18;
  }

  .rating-label {
    color: #2d1e18;
  }

  .review-textarea {
    padding: 2px;
    margin-top: 4px;
  }

  .review {
    padding: 2px;
    background: white;
    color: #2d1e18;
  }

  .rating {
    display: flex;
    flex-direction: row-reverse;
    unicode-bidi: bidi-override;
    direction: rtl;
  }

  .rating>input {
    display: none;
  }

  .rating>label {
    display: inline-block;
    font-size: .9rem;
    cursor: pointer;
    color: #ccc;
  }

  .rating>label:before {
    content: "★";
    color: #ccc;
  }

  .rating>input:checked~label:before,
  .rating>input:checked~label~label:before {
    color: #fc0;
  }

  .review-text {
    margin-bottom: 2px;
  }
</style>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $hotel_id = (int) $_POST["hotel_id"];
  $review_text = $_POST["review_text"];
  if (isset($_POST["review_rating"])) {
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