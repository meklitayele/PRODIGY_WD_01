<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Places to Visit</title>
    <link rel="stylesheet" href="./Packages/style/placestovisit.css" />
    <link
      href="https://api.fontshare.com/v2/css?f[]=gambetta@400,1,300,600,701,2,501,401,301,601,500,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <?php
session_start();
?>
<script>
  function h1(){
    <?php $_SESSION['package']="1"?>
  }
  function h2(){
    <?php $_SESSION['package']="2"?>
  }
  function h3(){
    <?php $_SESSION['package']="3"?>
  }
  function h4(){
    <?php $_SESSION['package']="4"?>
  }
</script>


  <body>
    <header>
      <div class="logo">
        <img
          class="EthLogo"
          src="images/logo-transparent-png.png"
          alt="EthiopiaLogo"
        />
      </div>

      <nav class="navBar">
        <div class="navDiv">
          <ul>
            <li class="home"><a href="homepage.html">HOME</a></li>
            <li><a href="map.html" target="_blank">MAP</a></li>
            <li><a href="contact.html" target="_blank">CONTACT</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div  class="Wrapper" style="height:100rem;  background: #EBE4D7;">
      <div class="PlacesContainer">
        <h1>Packages we offer</h1>
      </div>

      <div style="display: flex; flex-direction: column;  " class="container">
        
        <div style=" border-radius:20px; background-color: #361500;height:fit-content; color: white; width:fit-content; display:flex;" class ="top">
          <image src="./Packages/photo/collage (2).png" style=" margin-left:2rem; width:fit-content; height:20rem; padding:1rem; "/>
          <div style="display: flex; flex-direction: column; "><p style="font-size: 20px; font-family:sans-serif; font-weight:lighter; padding :3rem; margin:2rem;">Embark on a captivating month-long all-inclusive journey across the breadth of Ethiopia, immersing yourself in the country's rich cultural tapestry and awe-inspiring natural landscapes. Experience the best of Ethiopia with 5-star accommodations, private transportation, and guided explorations that unveil iconic landmarks, from the ancient rock-hewn churches of Lalibela to the magnificent Simien Mountains, while delving into the diverse traditions and cuisines of the country's vibrant regions through exclusive cultural activities and community-hosted experiences. Discover the personalized attention of expert local guides and the comfort of premium amenities as you craft an unforgettable, in-depth exploration of Ethiopia's captivating wonders. </p>
          <a style="background-color: darksalmon;  border-radius:10px; width:7rem; color:bisque; margin-top:-1rem;margin-left:4rem;  height :1.5rem; margin-bottom:1rem; text-decoration: none; padding-left:1rem; padding-top:1rem;" href="./jimma.php" class="btn1" onclick="h1()">Book Now</a>
        </div>
        
          
          
        </div>
        
        <div style="display: flex; gap:7rem; margin-top:4rem">
        <div class="box" style="height :45rem">
          <img style = "border-radius : 10px; height:20rem; " src="./Packages/photo/Lalibela.jpg" alt="National Museum of Ethiopia" />
          <h3>Tour of Lalibela</h3>
          <p>
          This 7-night travel package features a luxurious 5-star hotel stay with daily breakfast, as well as a personal tour guide and private transportation to showcase the top local attractions. In the evenings, guests will enjoy exclusive cultural programs such as campfires with live music. This comprehensive offering is designed to deliver an unmatched travel experience filled with comfort, convenience, and immersive experiences.
          </p>

          <a
            class="btn"
            href="./jimma.php"
            onclick="h2()"
            >BOOK</a>
        </div>
        <div class="box"style="height :45rem">
          <img style = "border-radius : 10px; height:20rem; " src="./Packages/photo/jimma.jpg" alt="unitypark" />
          <h3>Trip to Jimma</h3>
          <p>
          Discover the cultural treasures and natural wonders of Jimma, Ethiopia with this 7-night all-inclusive package. Enjoy 5-star accommodations, private transportation, and guided tours of top attractions like the Gibe III Hydroelectric Dam and Jimma University Botanical Garden. Experience authentic Ethiopian culture through exclusive activities like campfire gatherings with live music and private cooking classes.
          </p>
          <a style="margin-top: 1.3rem;" onclick="h3()" href="./jimma.php" class="btn" 
            >BOOK</a
          >
        </div>
        <div class="box"style="height :45rem">
          <img style = "border-radius : 10px; height:20rem; " src="./Packages/photo/afar.jpg" alt="Fendika Cultural Center" />
          <h3>Trip to Afar </h3>
          <p>
          Embark on a captivating 7-night journey through the cultural heart and natural wonders of Afar, Ethiopia with this all-inclusive package. Indulge in 5-star luxury, private transportation, and guided explorations of Afar's mesmerizing landscapes, from the Danakil Depression's otherworldly vistas to the rugged Simien Mountains, while immersing yourself in the region's vibrant traditions through exclusive cultural experiences
          </p>
          <a href="./jimma.php" class="btn" onclick="h4()" target="_blank"
            >BOOK</a
          >
          
        </div>
        
      </div>
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
