<?php
$errorMessage = "";

// Check if the form was submitted and file input is present
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fileToUpload"]) && !empty($_FILES["fileToUpload"]["name"])) {
    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check === false) {
        $errorMessage = "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $errorMessage = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        $errorMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errorMessage = "Sorry, your file was not uploaded.";
    } else {
        // Attempt to move the uploaded file
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true); // Create directory with full permissions
        }

        // Attempt to move the uploaded file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // File uploaded successfully

            // Insert into database
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "billing_details";
            
            $conn = new mysqli($host, $username, $password, $database);
            

            // $conn = new mysqli($hostname, $user, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $item = $_POST['item'];
            $iname = $_POST['iname'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $sql = "INSERT INTO photos (photo_path, item, iname, price, quantity) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $target_file, $item, $iname, $price, $quantity);
            if ($stmt->execute()) {
                $errorMessage = "New record created successfully";
            } else {
                $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        } else {
            $errorMessage = "Sorry, there was an error uploading your file.";
        }
    }
} else {
    $errorMessage = "No file uploaded.";
}
// echo $errorMessage;
?>
