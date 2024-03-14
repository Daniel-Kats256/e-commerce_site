<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any of the fields are empty
    if (!empty($_POST['c_country']) && !empty($_POST['c_fname']) && !empty($_POST['c_lname']) && !empty($_POST['c_company_name']) && !empty($_POST['c_address']) && !empty($_POST['c_address2']) && !empty($_POST['c_state']) && !empty($_POST['c_postal']) && !empty($_POST['c_email']) && !empty($_POST['c_phone']) && !empty($_POST['c_order_notes'])) {

        // Get form data
        $c_country = $_POST['c_country'];
        $c_fname = $_POST['c_fname'];
        $c_lname = $_POST['c_lname'];
        $c_company_name = $_POST['c_company_name'];
        $c_address = $_POST['c_address'];
        $c_address2 = $_POST['c_address2'];
        $c_state = $_POST['c_state'];
        $c_postal = $_POST['c_postal'];
        $c_email = $_POST['c_email'];
        $c_phone = $_POST['c_phone'];
        $c_order_notes = $_POST['c_order_notes'];

        // Database connection parameters
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "billing_details";

        // Create connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check for database connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            // Prepare and bind the INSERT statement
            $stmt = $conn->prepare("INSERT INTO details_tb (c_country, c_fname, c_lname, c_company_name, c_address, c_address2, c_state, c_postal, c_email, c_phone, c_order_notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssss", $c_country, $c_fname, $c_lname, $c_company_name, $c_address, $c_address2, $c_state, $c_postal, $c_email, $c_phone, $c_order_notes);

            // Execute the statement
            if ($stmt->execute()) {
                // Close the connection
                $stmt->close();
                $conn->close();
                // Redirect to cart.html
                header("location: cart.php");
                exit(); // Terminate script execution after redirect
            } else { n
                echo "Error: " . $stmt->error;
            }

            // Close the connection
            $stmt->close();
            $conn->close();
        }
    } else {
        // Handle the case where all fields are empty
        echo "All fields are required.";
    }
} else {
    // Handle the case where the form was not submitted
    echo "Form not submitted.";
}
?>
