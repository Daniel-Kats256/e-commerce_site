<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
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
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
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
                    
                    <a href="home.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Home</a>
                    <a href="inventory.php"  class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Inventory</a>
                   
                  
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
            <div class="container-fluid pt-4 px-4">
            <!-- <div class="col-sm-12 col-xl-6" class="row g-4">
                <?php include 'action/order.php'; ?>
                          
                <div class="bg-secondary rounded h-100 p-4" class="col-sm-12 col-xl-6">
                    <form action="" method="post" enctype="multipart/form-data">
                    
                            <div class="mb-4">
                                <h3>Customer Order </h3>
                            </div>
                                                                                
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Customer Name:</label>
                               <div> <input class="form-control bg-dark" type="text" name="cust_name"></div><br>
                            </div >
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Customer Contact:</label>
                               <div> <input class="form-control bg-dark" type="text" name="c_contact"></div><br>
                            </div >
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Customer Address:</label>
                               <div> <input class="form-control bg-dark" type="text" name="c_address"></div><br>
                            </div>
                             <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Customer Item:</label>
                               <div> <input class="form-control bg-dark" type="text" name="c_item"></div><br>
                            </div>
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Customer Quantity:</label>
                               <div> <input class="form-control bg-dark" type="text" name="c_quantity"></div><br>
                            </div>
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Customer price:</label>
                               <div> <input class="form-control bg-dark" type="text" name="c_price"></div><br>
                            </div>
                        <hr class="dropdown-divider" class="mb-3">
                        <div class="button" class="dropdown-item text-center" >
                            <button type="submit" name="order">ORDER</button>
                        </div>
                    </form>
                </div>
            </div> -->
            <div class="navbar-nav align-items-center ms-auto" class="col-12">
                    
            <!-- Widget Start -->
            <div class="container-fluid pt-4 px-4" class="col-12">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Orders</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table" class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Customer Contact</th>
                                    <th scope="col">Customer Address</th>
                                    <th scope="col">Item Ordered</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Unit Price</th>
                                
                                </tr>
                            </thead>
                            <tbody>    
                            <?php
$errorMessage = "";
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "billing_details";

// Establish connection
$conn = mysqli_connect($hostname, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if an "approve" request is made
if (isset($_GET['approve_id'])) {
    // Prepare and execute the transfer query
     $approve_id = $_GET['approve_id'];
    $sql_select = "SELECT * FROM orders WHERE id = $approve_id";
    $approve = mysqli_query($conn, $sql_select);
    
    if ($approve && mysqli_num_rows($approve) > 0) {
        $row = mysqli_fetch_assoc($approve);

        // Transfer records
        
            $sql_insert = "INSERT INTO sales (cust_name, c_contact, c_address, c_item, c_price, c_quantity) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql_insert);
            $stmt->bind_param("ssssss", $row['cust_name'], $row['c_contact'], $row['c_address'], $row['c_item'], $row['c_price'], $row['c_quantity']);

            if ($stmt->execute()) {
                //deleting the record
                $sql_delete = "DELETE FROM orders WHERE id = $approve_id";
                
                if(mysqli_query($conn, $sql_delete)){
                    $errorMessage = "Successful transfer and delete";
                } else {
                $errorMessage = "delete error: " . $mysqli_error($conn);
            }
        
    } else {
        $errorMessage = "error transfering record" . $stmt->error;
    }
}else{
    $errorMessage = "selected record not found";
}
}

// Perform a SELECT query to retrieve data from orders
$sql = "SELECT id, cust_name, c_contact, c_address, c_item, c_price, c_quantity FROM orders";
$result = mysqli_query($conn, $sql);

$totalquantity = 0;
if ($result) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Calculate total quantity
        $totalquantity += $row['c_quantity'];

        // Output the row
        echo "<tr>";
        echo "<th scope='row'>{$row['cust_name']}</th>";
        echo "<td>{$row['c_contact']}</td>";
        echo "<td>{$row['c_address']}</td>";
        echo "<td>{$row['c_item']}</td>";
        echo "<td>{$row['c_quantity']}</td>";
        echo "<td>{$row['c_price']}</td>";
        echo "<td><a href='?approve_id={$row['id']}' class='btn btn-sm btn-primary'>Approve</a></td>";
        echo "</tr>";
    }
} else {
    $errorMessage = "Error executing query: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

// Display error message
echo $errorMessage;
?>

                               
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->       
    
            <!-- Widget End -->

        <!-- Content End -->
        </div>

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