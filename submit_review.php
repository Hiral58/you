<!-- submit_review.php -->
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

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productID = $_POST["product_id"];
    $name = $_POST["name"];
    $review = $_POST["review"];

    // Store the review in the database
    $sql = "INSERT INTO reviews (product_id, name, review) VALUES ('$productID', '$name', '$review')";
    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
