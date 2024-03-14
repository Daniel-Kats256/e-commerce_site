<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>fliaveneue - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>fliaveneue</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <!-- <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a> -->
                   
                    <a href="home.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Home</a>
                    <a href="inventory.php" class="nav-item nav-link" ><i class="fa fa-keyboard me-2"></i>Inventory</a>
                   
                    </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav style="height: 60px;" class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
            </nav>
            <!-- Navbar End -->
                        <div style="min-width: 50rem;" class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Photos</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>    
      <?php
$errorMessage = "";
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "billing_details";

$conn = mysqli_connect($hostname, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get user input
    if(isset($_POST['id']) && isset($_POST['new'])){
    $id = $_POST['id'];
    $new = $_POST['new'];
    }
   // Prepare the UPDATE statement
$stmt = $conn->prepare("UPDATE photos SET price=? WHERE id=?");
// Bind parameters
$stmt->bind_param("ii", $new, $id);
// Execute the statement
if ($stmt->execute()) {
    echo ".";
} else {
    echo "Error updating: " . $stmt->error;
}
// Close the statement
$stmt->close();

}
// Check if a delete request is made
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // Perform delete query
    $sql_delete = "DELETE FROM photos WHERE id = $delete_id";
    if (mysqli_query($conn, $sql_delete)) {
        echo ".";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Perform a SELECT query to retrieve photo_path, item, and price
$sql = "SELECT id, photo_path, item, price, quantity FROM photos";
$result = mysqli_query($conn, $sql);

function multiply($price, $quantity) {
    return $price * $quantity;
}
$inventorys = 0;

if ($result) {
    // to calculate the total amount
    $total = 0;
    
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Access photo_path, item, and price from each row
        $id=$row['id'];
        $photo_path = $row['photo_path'];
        $item = $row['item'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        
         $product = multiply($price, $quantity);
         $inventorys += $quantity;
         $total += multiply($price, $quantity);
        echo "<tr>";
       
         echo "<td><img src=' $photo_path ' height='50px' width='100px'></td>";
         
         echo "<td>$$price</td>";
         echo "<td> $quantity</td>";
         echo "<td>$$product</td>";
        // echo "<td><a href='?id=$id' class='btn btn-sm btn-primary'>Update</a></td>"; 
        // echo "<td><a href='?delete_id=$id' class='btn btn-sm btn-primary'>Delete</a></td>";
    
         // Form for updating price
        echo "<td>";
        echo "<form method='POST' style='width: 90px; display: flex;'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<input style='width: 60px;' type='text' name='new' value='$price'>";
        echo "<a class='btn btn-sm btn-primary'><input background-color='none'type='submit' name='update' value='Update'></a>";
        echo "</form>";
        echo "</td>";
        echo "<td><a href='?delete_id=$id' class='btn btn-sm btn-primary'>Delete</a></td>";
        echo "</tr>";
    }

        echo "<tr>";
        echo "<td></td>";
        echo "<td></td>";
        echo "<td>Gross Total:  </td>";
        echo "<td>$$total</td>";
        echo "</tr>";
    
} else {
    $errorMessage = "Error executing query: " . mysqli_error($conn);
}

$sql = "SELECT id, cust_name, c_contact, c_address, c_item, c_price, c_quantity FROM orders";
$result = mysqli_query($conn, $sql);

$totalquantity = 0;
if ($result) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {

            $id=$row['id'];
            $cust_name = $row['cust_name'];
            $c_contact = $row['c_contact'];
            $c_address = $row['c_address'];
            $c_item = $row['c_item'];
            $c_quantity = $row['c_quantity'];
            $c_price = $row['c_price'];

            $totalquantity += $c_quantity;
    }
}
$sql = "SELECT id, cust_name, c_contact, c_address, c_item, c_price, c_quantity FROM sales";
$result = mysqli_query($conn, $sql);

$totalsales = 0;
if ($result) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {

            $id=$row['id'];
            $cust_name = $row['cust_name'];
            $c_contact = $row['c_contact'];
            $c_address = $row['c_address'];
            $c_item = $row['c_item'];
            $c_quantity = $row['c_quantity'];
            $c_price = $row['c_price'];

            $totalsales += $c_quantity;
    }
}
// Close the connection
mysqli_close($conn);
echo $errorMessage;

?>
                                </tr>
                            </tbody>
                        </table>
                        <hr class="dropdown-divider">
                        </div>
                    <!-- Form End -->
    
               <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <a href="order.php">
                            <div class="ms-3">
                              
                                <p class="mb-2">Orders</p>
                                <h6 class="mb-0"><?php echo "$totalquantity products" ; ?></h6>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <a href="sales.php">
                            <div class="ms-3">
                                <p class="mb-2">Total Sales</p>
                                <h6 class="mb-0"><?php echo "$totalsales products" ; ?></h6>
                            </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Inventory</p>
                                <h6 class="mb-0"><?php echo "$inventorys products" ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->  
            <!-- Form Start -->  
                 </div>
                    </div>
           
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>