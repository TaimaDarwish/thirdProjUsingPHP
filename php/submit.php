<?php
$servername = "db";
$username = "devuser";
$password = "devpass";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO posts (name, favorite_color) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $color);

$name = $_POST['name'];
$color = $_POST['color'];
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect to second page with data
header("Location: second.php?name=" . urlencode($name) . "&color=" . urlencode($color));
exit();
?>