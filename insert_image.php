<?php
include "koneksi.php";
// Retrieve image source from AJAX request
$imageSrc = $_POST['imageSrc'];

echo "$imageSrc";
// Prepare and execute SQL query to insert image source into database
$stmt = $conn->prepare("INSERT INTO watchlist (thumbnail) VALUES (?)");
$stmt->bind_param("s", $imageSrc);
if ($stmt->execute()) {
    echo "Image inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
