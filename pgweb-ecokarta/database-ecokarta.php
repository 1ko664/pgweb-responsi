<?php
// Sesuaikan dengan setting MySQL
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

$sql = "SELECT * FROM ecowisata_jkt";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1px'>
        <tr>
            <th>Location</th>
            <th>City</th>
            <th>Description</th>
        </tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["Location"] . "</td>
            <td>" . $row["City"] . "</td>
            <td style='text-align: right;'>" . $row["Description"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
