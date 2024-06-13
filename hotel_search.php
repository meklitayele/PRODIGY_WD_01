<!DOCTYPE html>
<html>

<head>
    <title>Hotel Search</title>
</head>

<body>
    <h1>Hotel Search</h1>
    <form method="GET" action="">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['city'])) {
        // Retrieve the city from the form input
        $city = $_GET['city'];

        // Establish a database connection (code from previous step)


        // Establish a connection
        $connection = mysqli_connect('localhost', 'root', '', 'traveldb');

        // Check the connection
        if (!$connection) {
            die('Failed to connect to the database: ' . mysqli_connect_error());
        }

        // Prepare and execute the SELECT query with a JOIN
        $query = "SELECT hotelTable.*, citytable.CityName FROM hotelTable INNER JOIN citytable ON hotelTable.CityID = citytable.CityID WHERE citytable.CityName LIKE '%$city%'";
        $result = mysqli_query($connection, $query);

        // Process the query result
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Hotel ID: " . $row['HotelID'] . "<br>";
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
            echo "Query execution failed: " . mysqli_error($connection);
        }

        mysqli_close($connection);
    }
    ?>
</body>

</html>