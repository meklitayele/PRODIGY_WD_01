<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../css/yy.css" />
    <script src="../script/links.js"></script>
  </head>
  <body>



  <?php
    $hostname = 'localhost';
    $port = 3307;
    $username = 'hotel';
    $password = '1234';
    $database = 'hotel_db';

    $showForm = true; // Flag to control the visibility of the form

    if (isset($_GET['city'])) {
        // Retrieve the city from the form input
        $city = $_GET['city'];

        // Establish a database connection code from previous step

        // Establish a connection
        $conn = mysqli_connect($hostname, $username, $password, $database, $port);

        // Check if it is connected
        if (!$conn) {
            echo 'Failed to connect to the database: ' . mysqli_connect_error();
        }

        // Prepare and execute the SELECT query with a JOIN
        $city = '%' . $city . '%';
        $query = "SELECT hotel.*, city.CityName 
                  FROM hotel 
                  INNER JOIN city ON hotel.CityID = city.CityID 
                  WHERE city.CityName LIKE '$city'";

        $result = mysqli_query($conn, $query);

        // Process the query result
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $showForm = false; 

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Hotel ID: " . $row['Hotel ID'] . "<br>";
                    echo "Hotel Name: " . $row['HotelName'] . "<br>";
                    echo "Hotel Address: " . $row['HotelAddress'] . "<br>";
                    echo "Contact Number: " . $row['ContactNumber'] . "<br>";
                    echo "Email Address: " . $row['EmailAddress'] . "<br>";
                    echo "City: " . $row['CityName'] . "<br>";
                    echo "<hr>";
                }
            } else {
                echo "No hotels found in the specified city.";
            }

            mysqli_free_result($result);
        } else {
            echo "Query execution failed: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>

    



    <header class="main-header">
      <div class="header-wrapper">
        <div class="main-logo">
          <img
            class="logo"
            src="../images/logo-transparent-png.png"
            alt="LOGO"
          />
        </div>

        <nav>
          <ul class="main-menu">
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#destination">DESTINATIONS</a></li>
            <li><a href="#eth">ETHIOPIA</a></li>
            <li>
              <a onclick="goToPage('login.html')" class="signin">LOG IN</a>
              
              <form id="searchForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" style="display: inline;">
                <input type="text" name="city" placeholder="Enter a city" required>
                <button type="submit" class="search-button">Search</button>
              </form>
            
                <script>
                    function performSearch() {
                        document.getElementById("searchForm").submit();
                    }
                </script>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <div class="Part-1">
        <img src="../images/po3.png" alt="" id="BackVideo" />
      </div>
      <div class="Part-2" id="ethiopia">
        <div class="aboutEth">
          <img
            class="collage"
            src="../images/collage (2).png"
            alt="collage-image-of-ethiopia"
          />
        </div>
        <div class="description">
          <h2 class="text" id="eth">WELCOME TO ETHIOPIA</h2>
          Ethiopia, is a captivating destination that offers a unique blend of
          historical wonders, vibrant culture, and breathtaking landscapes.
          Immerse yourself in the country's rich history by exploring UNESCO
          World Heritage Sites like the awe-inspiring rock-hewn churches of
          Lalibela and the ancient city of Axum with its towering obelisks.
          Witness stunning natural beauty in the Simien Mountains and the
          Danakil Depression, and encounter rare wildlife and endemic species.
          Engage with local communities, savor the flavors of Ethiopian cuisine,
          and experience warm hospitality. Whether you seek ancient
          civilizations, diverse cultures, or thrilling outdoor adventures,
          Ethiopia promises an unforgettable journey.
        </div>
      </div>

      <div class="Part-3">
        <h2 class="city" id="destination">DESTINATIONS</h2>

        <div class="container">
          <img
            onclick="goToPage('page2.html')"
            class="city-links"
            id="box1"
            src="../images/afar.jpg"
            alt="YE-KOLO-CODERS"
          />

          <div class="hoverwrap">
            <img
              onclick="goToPage('JIMMA/index.html')"
              class="city-links"
              id="box2"
              src="../images/jimma.jpg"
              alt="YE-KOLO-CODERS"
            />

            <div class="hovercap">JIMMA</div>
          </div>

          <div class="hoverwrap">
            <img
              onclick="goToPage('Gonder/citypage3/index.html')"
              class="city-links"
              id="box3"
              src="../images/gondar.jpg"
              alt="YE-KOLO-CODERS"
            />
            <div class="hovercap">GONDER</div>
          </div>

          <div class="hoverwrap">
            <img
              onclick="goToPage('ADDIS/index.html')"
              id="box4"
              class="city-links"
              src="../images/addis.jpg"
              alt="YE-KOLO-CODERS"
            />
            <div class="hovercap">ADDIS ABABA</div>
          </div>

          <div class="hoverwrap">
            <img
              onclick="goToPage('LALIBELA/index.html')"
              id="box3"
              class="city-links"
              src="../images/harar.jpg"
              alt="YE-KOLO-CODERS"
            />
            <div class="hovercap">LALIBELA</div>
          </div>

          <div class="hoverwrap">
            <img
              onclick="goToPage('ARBAMINCH/index.html')"
              class="city-links"
              id="box2"
              src="../images/hawassa.jpg"
              alt="YE-KOLO-CODERS"
            />
            <div class="hovercap">ARBAMINCH</div>
          </div>

          <div class="hoverwrap">
            <img
              class="city-links"
              id="box1"
              src="../images/axsum.jpg"
              alt="YE-KOLO-CODERS"
            />
          </div>
          <div class="hovercap">AXSUM</div>
        </div>

        <p class="city2">
          "Explore a world of possibilities and select your dream destination
          for your next adventure. Whether you're planning a relaxing getaway,
          an exciting city exploration, a breathtaking mountain retreat,or an
          immersive cultural immersion we've got you covered."
        </p>
      </div>
      <div class="Part-4"></div>
    </main>
    <footer id="about">
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

        <div class="footerBottom">
          <p>
            Copyright &copy; 2024 Designed by
            <span class="designer">YeKolo Coders</span>
          </p>
        </div>
      </div>
    </footer>
    
 
 
  </body>
</html>
