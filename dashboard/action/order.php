<?php
$errorMessage = "";

// Check if the form was submitted and file input is present
if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
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
            $cust_name = $_POST['cust_name'];
            $c_contact = $_POST['c_contact'];
            $c_address = $_POST['c_address'];
            $c_item = $_POST['c_item'];
            $c_quantity = $_POST['c_quantity'];
            $c_price = $_POST['c_price'];

            $sql = "INSERT INTO orders (cust_name, c_contact, c_address, c_item, c_price, c_quantity) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssss", $cust_name, $c_contact, $c_address, $c_item, $c_price, $c_quantity);
            if ($stmt->execute()) {
                $errorMessage = "New record created successfully";
            } else {
                $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        } else {
            $errorMessage = "Sorry, there was an error.";
        }
  
?>
