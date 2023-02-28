<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprogss211db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, email FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<h1>Guests Log</h1>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
		"id: ". $row["id"]. 
		" - Name: ". $row["firstname"]. 
		" - Email: ". $row["email"]. 
		"<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>