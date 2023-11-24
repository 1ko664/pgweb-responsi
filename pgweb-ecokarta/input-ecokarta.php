<?php
$Location = $_POST['Location'];
$City = $_POST['City'];
$Description = $_POST['Description'];

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "penduduk-pgweb8";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ecowisata_jkt (Location, City, Description)
VALUES ('$Location', $City, $Description)";
if ($conn->query($sql) === TRUE) {
    echo "New data has been recorded";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
?>
