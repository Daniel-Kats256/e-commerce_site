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
            <div class="col-sm-12 col-xl-6" class="row g-4">
                <?php include 'action/home.php'; ?>
                          
                <div class="bg-secondary rounded h-100 p-4" class="col-sm-12 col-xl-6">
                    <form action="" method="post" enctype="multipart/form-data">
                    
                            <div class="mb-4">
                                <h3>Add Items</h3>
                            </div>
                            
                            <div class="mb-3">
                                <label>Image:</label>
                               <input class="form-control bg-dark" type="file" name="fileToUpload">
                               <br>
                            </div>
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Item Name:</label>
                               <div> <input class="form-control bg-dark" type="text" name="iname"></div><br>
                            </div >
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Item description:</label>
                               <div> <input class="form-control bg-dark" type="text" name="item"></div><br>
                            </div >
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Price:</label>
                               <div> <input class="form-control bg-dark" type="text" name="price"></div><br>
                            </div>
                            <hr class="dropdown-divider">
                            <div class="mb-3">
                                <label>Quantity:</label>
                               <div> <input class="form-control bg-dark" type="text" name="quantity"></div><br>
                            </div>
                    
                        <hr class="dropdown-divider" class="mb-3">
                        <div class="button" class="dropdown-item text-center" >
                            <button type="submit" name="next">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="navbar-nav align-items-center ms-auto" class="col-12">
                    
            <!-- Widget Start -->
            <div class="container-fluid pt-4 px-4" class="col-12">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Sales</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table" class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Image</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>    
      <?php
$errorMessage = "";
$hostiname = "localhost";
$user = "root";
$password = "";
$dbiname = "billing_details";

$conn = mysqli_connect($hostiname, $user, $password, $dbiname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get user input
    if(isset($_POST['id']) && isset($_POST['new'])){
    $id = $_POST['id'];
    $new = $_POST['new'];
    
    $sql = "UPDATE photos SET price='$new' WHERE id = $id";

    if($conn->query($sql) === TRUE){
        echo ".";
    }else {
        echo "error updating";
    }
}
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
$sql = "SELECT id, photo_path, iname, item, price, quantity FROM photos";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Access photo_path, item, and price from each row
        $id=$row['id'];
        $photo_path = $row['photo_path'];
        $iname = $row['iname'];
        $item = $row['item'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        
        echo "<tr>";
       
         echo "<th scope='row'><img src=' $photo_path ' height='100px' width='150px'></th>";
         echo "<td> $iname </td>";
         echo "<td> $item </td>";
         echo "<td>Ush$price</td>";
         echo "<td> $quantity</td>";
        // echo "<td><a href='?id=$id' class='btn btn-sm btn-primary'>Update</a></td>"; 
        // echo "<td><a href='?delete_id=$id' class='btn btn-sm btn-primary'>Delete</a></td>";
    
         // Form for updating price
        echo "<td>";
        echo "<form method='POST' style='width: 90px; display: flex;'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<input style='width: 80px;' type='text' name='new' value='Ush$price'>";
        echo "<a class='btn btn-sm btn-primary'><input background-color='none'type='submit' iname='update' value='Update'></a>";
        echo "</form>";
        echo "</td>";
        echo "<td><a href='?delete_id=$id' class='btn btn-sm btn-primary'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    $errorMessage = "Error executing query: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
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