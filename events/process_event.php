<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ceylon_happens"; // Replace with your actual database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $title = isset($_POST['event-title']) ? $_POST['event-title'] : '';
    $description = isset($_POST['event-description']) ? $_POST['event-description'] : '';
    $category = isset($_POST['event-category']) ? $_POST['event-category'] : '';
    $date = isset($_POST['event-date']) ? $_POST['event-date'] : '';
    $time = isset($_POST['event-time']) ? $_POST['event-time'] : '';
    $location = isset($_POST['event-location']) ? $_POST['event-location'] : '';
    $organizer_name = isset($_POST['organizer-name']) ? $_POST['organizer-name'] : '';
    $organizer_email = isset($_POST['organizer-email']) ? $_POST['organizer-email'] : '';
    $organizer_phone = isset($_POST['organizer-phone']) ? $_POST['organizer-phone'] : '';
    $price = isset($_POST['ticket-price']) ? $_POST['ticket-price'] : '';

    // Initialize file variables
    $imageData = null;
    $imageFileType = '';

    // Handle file upload
    if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] === UPLOAD_ERR_OK) {
        $imageFileType = strtolower(pathinfo($_FILES["product_image"]["name"], PATHINFO_EXTENSION));

        // Check if image file is a actual image
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if ($check !== false) {
            // Read the file content into a binary string
            $imageData = file_get_contents($_FILES["product_image"]["tmp_name"]);

            // Prepare SQL query
            $sql = "INSERT INTO product (product_name, product_desc, category_id, event_date, event_time, event_location, organizer_name, organizer_email, organizer_phone, price, product_image)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssssssb", $title, $description, $category, $date, $time, $location, $organizer_name, $organizer_email, $organizer_phone, $price, $null);
            
            // Send binary data
            $stmt->send_long_data(10, $imageData);

            if ($stmt->execute()) {
                // Redirect to payment page or show a success message
                header("Location: payment_page.php");
                exit(); // Make sure to exit after redirection
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $stmt->close();
        } else {
            echo "File is not an image.";
        }
    } else {
        // Handle the case where no file was uploaded or there was an error
        echo "No file uploaded or there was an upload error.";
        // Optionally, display specific upload error
        if (isset($_FILES["product_image"])) {
            $fileError = $_FILES["product_image"]["error"];
            switch ($fileError) {
                case UPLOAD_ERR_INI_SIZE:
                    echo "File size exceeds the maximum allowed.";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo "File size exceeds the form limit.";
                    break;
                default:
                    echo "Upload error code: $fileError";
                    break;
            }
        }
    }

    $conn->close();
}
?>