<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                        <!-- <th class="product-thumbnail">ID</th> -->
                          <th class="product-thumbnail">Image</th>
                          <th class="product-thumbnail">Name</th>
                          <th class="product-name">Description</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Amount</th>
                          <th class="product-remove">Remove</th>
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
// Check if a delete request is made
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // Perform delete query
    $sql_delete = "DELETE FROM cust_order WHERE id = $delete_id";
    if (mysqli_query($conn, $sql_delete)) {
        echo ".";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
//calculating amount
// if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['c_quantity']) && isset($row['price'])){
//   $price = $row['price'];
//   $c_quantity = $_POST['c_quantity'];
//   $c_quantity=0;

// }
// Perform a SELECT query to retrieve photo_path, item, and price
$sql = "SELECT id, photo_path, iname, item, price FROM cust_order";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Access photo_path, item, and price from each row
        $id=$row['id'];
        $photo_path = "dashboard/" . $row['photo_path'];
        $iname = $row['iname'];
        $item = $row['item'];
        $price = $row['price'];
        // Initialize $c_quantity for each row
        $c_quantity = isset($_POST['c_quantity']) ? $_POST['c_quantity'] : 1;

        // Calculate amount
        $amount = $price * $c_quantity;
       ?>
        <tr>
                          <!-- <?php echo "<td> $id </td>";?> -->
                          <td class="product-thumbnail">
                            <?php echo "<img src='$photo_path' alt='Image' class='img-fluid'>"; ?>
                          </td>
                          <td class="product-name">
                            <?php echo "<h2 class='h5 text-black'>$iname</h2>"; ?>
                          </td>
                          <td class="product-name">
                            <?php echo "<h2 class='h5 text-black'>$item</h2>"; ?>
                          </td>
                            <?php echo "<td>ush$price</td>";?>
                            <td>
                              <form action="" method="post">
                                  <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                      <input name="c_quantity" type="text" class="form-control text-center quantity-amount" value="<?php echo $c_quantity; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                  </div>
                              </form>
                          </td>
                          <td><?php echo "Ush$amount"; ?></td>
                          <td>
                            <?php echo "<a href='?delete_id=$id' class='btn btn-black btn-sm'>X</a>"; ?>
                          </td>
                        </tr>
        <?php
        // echo "<tr>";
        // echo "<td> $id </td>";
        //  echo "<td><img src=' $photo_path ' height='50px' width='100px'></td>";
        //  echo "<td> $item </td>";
        //  echo "<td>$price</td>";
        //  echo "<td><a href='?delete_id=$id' class='btn btn-sm btn-primary'>Delete</a></td>";
        // echo "</tr>";
    }
} else {
    $errorMessage = "Error executing query: " . mysqli_error($conn);
}
if(isset($_POST['submit'])){
  
}
// Close the connection
mysqli_close($conn);
echo $errorMessage;
?>
                               
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <button type ="submit" name="submit" class="btn btn-black btn-sm btn-block">Orders</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
