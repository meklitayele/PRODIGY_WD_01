<html><?php
$con = new mysqli("localhost","root","Kacho123+","hoteldb") ;
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    echo "connected";
}
?>

</html>