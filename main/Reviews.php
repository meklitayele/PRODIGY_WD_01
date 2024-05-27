<html>
    <div class="container">
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
            <li><a href="#eth">PACKAGES</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class = "hotel">
        
    </div>
    </div>
</html>
<style type="text/css">
  * {
  margin: 0px;
  padding: 0px;
  font-family: 'Satoshi', sans-serif;
}

.container {
  background: #1C0A00;
  height: 100%;
  width: 100%;
  color: white;
  position: relative;
}

.logo {
  height: 75px;
  width: 210px;
  display: inline;
}

.main-header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  font-family: sans-serif;
  color: white;
  background-color: #341511; /* Add a contrasting background color */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header-wrapper {
  display: block;
  width: 70%;
  margin: 0 auto;
  padding-top: 1em;
}

.main-logo {
  float: left;
  font-weight: 700;
  font-size: 1.875em;
  filter: brightness(150%);
}

.main-menu {
  float: right;
  text-align: center;
}

.main-menu li {
  display: inline-block;
  padding: 0.75em 1.875em;
}

.main-menu li a {
  padding-bottom: 0.75em;
  text-transform: uppercase;
  color: white;
  font-size: 0.875em;
}

.main-menu li a:hover {
  color: #fce38a;
  border-bottom: 0.1875em solid yellow;
  transition: 0.1s;
  text-decoration: none;
}

.main-menu li a span {
  font-size: 1.2em;
}

.main-menu li:last-child {
  padding: 0.75em 0;
}

.main-menu li:nth-child(6) a:hover,
.main-menu li:last-child a:hover {
  border: none;
}

</style>