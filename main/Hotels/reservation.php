<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION HOTEL</title>

    <link rel="stylesheet" href="./css/bootstrap.css" />

    <link href="./css/font-awesome.css" rel="stylesheet" />

    <!-- <link href="./css/styles.css" rel="stylesheet" /> -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script>
        function showConfirmation() {
            alert("Form submitted successfully!");
        }
    </script>
</head>
<header>
    <div class="logo">
        <img style=" background: #1C0A00;
                    padding: 10px 15px;
                    display: flex;
                    justify-content: space-between;" src="images/logo-transparent-png.png" alt="logo" class="logos" />
    </div>
    <nav style=" background: #361500;
                    padding-left: 15px;
                    padding-right: 15px;" class="navBar">
        <div style="display: flex;
                    align-items: center;
                    justify-content: space-between;
                    width: 100%;" class="navDiv">
            <ul style="display: flex;
                    justify-content: space-between;
                    width: 100%;
                    padding: 0;">
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;" class="home"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../homepage.html">HOME</a></li>
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;" class="city"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../ADDIS/index.html">ADDIS ABABA</a></li>
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../ADDIS/placestovisit.html">PLACES TO VISIT</a></li>
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../ADDIS/experiences.html">EXPERIENCES</a></li>
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../ADDIS/hotels2.php">HOTELS</a></li>
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../ADDIS/map.html">MAP</a></li>
                <li style="list-style: none;
                        text-align: center;
                        flex-grow: 1;"><a style="display: block;
                                                    text-decoration: none;
                                                    padding: 10px;
                                                    color: #fff;
                                                    transition: background-color 0.3s;" href="../ADDIS/contact.php">CONTACT</a></li>
            </ul>
        </div>
    </nav>
</header>

<body style="background-color:cornsilk;">




    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        RESERVATION <small></small>
                    </h1>
                </div>
            </div>


            <div class="row">

                <div style="background-color:cornsilk;" class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div style="background-color:saddlebrown;  border: 1px solid brown;" class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
                            <form onsubmit="showConfirmation()" name="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <div class="form-group">
                                    <label>Title*</label>
                                    <select name="title" class="form-control" required>
                                        <option value selected></option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Miss.">Miss.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Rev .">Rev .</option>
                                        <option value="Rev . Fr">Rev . Fr .</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="fname" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lname" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label>Nationality*</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="nation" value="Ethiopian" checked="">Ethiopian
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="nation" value="Non Ethiopian ">Non Ethiopian
                                    </label>

                                </div>
                                <?php

                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>
                                <div class="form-group">
                                    <label>Passport Country*</label>
                                    <select name="country" class="form-control" required>
                                        <option value selected></option>
                                        <?php
                                        foreach ($countries as $key => $value) :
                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="phone" type="text" class="form-control" required>

                                </div>

                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div style="background-color:saddlebrown;  border: 1px solid brown" class="panel-heading">
                                RESERVATION INFORMATION
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Type Of Room *</label>
                                    <select name="troom" class="form-control" required>
                                        <option value selected></option>
                                        <option value="Superior Room">SUPERIOR ROOM</option>
                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                        <option value="Guest House">GUEST HOUSE</option>
                                        <option value="Single Room">SINGLE ROOM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bedding Type</label>
                                    <select name="bed" class="form-control" required>
                                        <option value selected></option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Triple">Triple</option>
                                        <option value="Quad">Quad</option>
                                        <option value="None">None</option>


                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No.of Rooms *</label>
                                    <select name="nroom" class="form-control" required>
                                        <option value selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Meal Plan</label>
                                    <select name="meal" class="form-control" required>
                                        <option value selected></option>
                                        <option value="Room only">Room only</option>
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Half Board">Half Board</option>
                                        <option value="Full Board">Full Board</option>



                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Check-In</label>
                                    <input name="cin" type="date" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label>Check-out</label>
                                    <input name="cout" type="date" class="form-control">

                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-12 col-sm-12">
                        <div style="background:cornsilk " class="well">
                            <input style="width : 100%; height :20%;" type="submit" name="submit" value="Submit" class="btn btn-primary" />


                            </form>

                        </div>
                    </div>
                </div>


            </div>



        </div>

    </div>

    </div>


    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_POST['submit'])) {
        $con = new mysqli("localhost", "root", "", "traveldb");

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $title = $con->real_escape_string($_POST["title"]);
        $fname = $con->real_escape_string($_POST["fname"]);
        $lname = $con->real_escape_string($_POST["lname"]);
        $country = $con->real_escape_string($_POST["country"]);
        $nation = $con->real_escape_string($_POST["nation"]);
        $phone = $con->real_escape_string($_POST["phone"]);
        $troom = $con->real_escape_string($_POST["troom"]);
        $bed = $con->real_escape_string($_POST["bed"]);
        $nroom = $con->real_escape_string($_POST["nroom"]);
        $meal = $con->real_escape_string($_POST["meal"]);
        $cin = $con->real_escape_string($_POST["cin"]);
        $cout = $con->real_escape_string($_POST["cout"]);
        $email = $con->real_escape_string($_POST['email']);

        $checkQuery = "SELECT COUNT(*) FROM roombook WHERE email = '$email'";
        $checkResult = $con->query($checkQuery);

        if ($checkResult) {
            $data = $checkResult->fetch_array()[0];
            if ($data > 0) { // Change to > 0 as 1 user can have 1 booking
                echo "<script type='text/javascript'> alert('User Already Exists')</script>";
            } else {
                $new = "Not Conform";
                $nodays = floor((strtotime($cout) - strtotime($cin)) / (60 * 60 * 24));

                $newUserQuery = "INSERT INTO roombook (Title, FName, LName, Email, National, Country, Phone, TRoom, Bed, NRoom, Meal, cin, cout, stat, nodays) 
                         VALUES ('$title', '$fname', '$lname', '$email', '$nation', '$country', '$phone', '$troom', '$bed', '$nroom', '$meal', '$cin', '$cout', '$new', '$nodays')";

                if ($con->query($newUserQuery) === TRUE) {
                    echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                } else {
                    echo "<script type='text/javascript'> alert('Error adding user to the database')</script>";
                }
            }
        } else {
            echo "<script type='text/javascript'> alert('Error checking user in the database')</script>";
        }

        $con->close();
    }
    ?>



    ?>

</body>

</html>