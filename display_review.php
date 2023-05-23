<!-- display_reviews.php -->
<?php
// Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "cart_sys";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['product_id'])) {
    $productID = $_GET['product_id'];

    // Retrieve the reviews for the specific product
    $sql = "SELECT * FROM reviews WHERE product_id = '$productID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the reviews
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
            echo "<p><strong>Review:</strong> " . $row["review"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No reviews available";
    }
}
// Close the connection
$conn->close();
?>