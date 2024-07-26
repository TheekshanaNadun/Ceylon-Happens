<?php
require 'vendor/autoload.php';

// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('your-secret-key-here');

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ceylon_happens";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
            $title = $_POST['product_name'];
            $description = $_POST['product_descn'];
            $category = $_POST['category_id'];
            $date = $_POST['event-date'];
            $time = $_POST['event-time'];
            $location = $_POST['event-location'];
            $organizer_name = $_POST['organizer-name'];
            $organizer_email = $_POST['organizer-email'];
            $organizer_phone = $_POST['organizer-phone'];
            $price = $_POST['ticket-price'];

            // Insert data into database
            $sql = "INSERT INTO product (title, description, category, date, time, location, organizer_name, organizer_email, organizer_phone, price, image)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssssssss", $title, $description, $category, $date, $time, $location, $organizer_name, $organizer_email, $organizer_phone, $price, $target_file);

            if ($stmt->execute()) {
                echo "Event published successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }

    $conn->close();
}
?>
