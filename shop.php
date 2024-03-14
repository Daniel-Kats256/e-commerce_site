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
//placing an order, check if order request is made
if(isset($_GET['order_id'])) {
  $order_id = $_GET['order_id'];
  $sql_select = "SELECT * FROM photos WHERE id = ?";
  $stmt_select = $conn->prepare($sql_select);
  $stmt_select->bind_param("i", $order_id);
  $stmt_select->execute();
  $order = $stmt_select->get_result();
  // $order = mysqli_query($conn, $sql_select);

  if($order && $order->num_rows > 0){
    $row = $order->fetch_assoc();

    //transfering
    $sql_insert = "INSERT INTO cust_order (photo_path, iname, item, price, quantity) VALUES (?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("sssss", $row['photo_path'], $row['iname'], $row['item'], $row['price'], $row['quantity']);

    if($stmt_insert->execute()){
      header("Location: cart.php");
      exit();
    }else{
      $errorMessage = "error transfering record " . $stmt_insert->error;
    }
  }else{
    $errorMessage = "selected record not found";
  }

}

// Perform a SELECT query to retrieve photo_path, item, and price
        ?> 
<!DOCTYPE html>

<html lang="hr">
  <head>
    <script async="" src="../gtag/js?id=UA-153076892-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-153076892-1");
    </script>
    <meta charset="utf-8" />
    <link
      media="all"
      href="../wp-content/cache/autoptimize/css/autoptimize_38a9fa486346deb11b84c66baf52d241.css"
      rel="stylesheet"
    />
    <title>Flip Avenue Limited</title>
    <link
      rel="shortcut icon"
      href="../wp-content/themes/incolor-wp/public/img/icons/favicon.png"
    />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="50e8062195" />
 


    <meta
      name="robots"
      content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

    <link rel="canonical" href="index.htm" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="Classic line - We are creating emotions"/>
   
    
    <meta property="og:site_name" content="We are creating emotions" />
    <meta
      property="og:image"
      content="https://incolor-kuhinje.hr/wp-content/uploads/2019/08/sample-13.jpg"/>
    <meta
      property="og:image:secure_url"
      content="https://incolor-kuhinje.hr/wp-content/uploads/2019/08/sample-13.jpg"/>
    <meta property="og:image:width" content="572" />
    <meta property="og:image:height" content="726" />
    <meta name="twitter:card" content="summary_large_image" />
  
    <meta
      name="twitter:image"
      content="https://incolor-kuhinje.hr/wp-content/uploads/2019/08/sample-13.jpg"
    />
   
      
    </script>
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//s.w.org" />
    <script
      type="text/javascript"
      src="../wp-content/themes/incolor-wp/public/js/manifest.js?ver=1.0"
      id="manifest-js"></script>
    <script
      type="text/javascript"
      src="../wp-content/themes/incolor-wp/public/js/vendor.js?ver=1.0"
      id="vendor-js"></script>
    <link rel="https://api.w.org/" href="../wp-json/index.htm" />
    <link
      rel="alternate"
      type="application/json"
      href="https://incolor-kuhinje.hr/wp-json/wp/v2/pages/16"/>
    <link rel="shortlink" href="index.htm?p=16" />
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

    <link
      rel="alternate"
      type="application/json+oembed"
     
      href="../wp-json/oembed/1.0/embed-4?url=https%3A%2F%2Fincolor-kuhinje.hr%2Fclassic-line%2F"/>
    <link
      rel="alternate"
      type="text/xml+oembed"
     
      href="../wp-json/oembed/1.0/embed-5?url=https%3A%2F%2Fincolor-kuhinje.hr%2Fclassic-line%2F&#038;format=xml"/>
      <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <link href="css/tiny-slider.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">

    </head>

  <body
    class="page-template page-template-tpl-classic-line page-template-tpl-classic-line-php page page-id-16 single-author singular">
    <div id="popup-app"><popup></popup></div>
    <div class="mouse-area">
      <div class="mouse" data-method="mouseControll">
        <span class="border"></span>
        <div class="more-info">
          <span></span> <span></span> <span>View Classic</span>
        </div>
        <div class="more-info type-2">
          <span></span> <span></span> <span>View Luxury</span>
        </div>
        <div class="drag"><span></span> <span></span> <span>Drag</span></div>
      </div>
    </div>
    <div class="loader">
      <div class="bg"></div>
      <div class="cnt">
        <h1 class="main-title">We Are Creating Emotions</h1>
      </div>
    </div>
    <header id="page-header" class="header" data-method="headerController">
      <a href="../index.htm" class="logo"></a>
      <a href="#" class="menu-button">
        <span></span> <span></span> <span></span>
      </a>
      <div class="lang-wrap cf">
        <a href="#">en</a> <a href="#" class="active">hr</a>
        <a href="contact.htm" class="popup-button">
          <span></span> <span></span> <span></span>
        </a>
      </div>
      <ul class="socials cf">
        <li>
          <a
            href="https://www.facebook.com/profile.php?id=61550707256066"
            target="_blank">Facebook</a>
        </li>
        <li>
          <a href="https://www.instagram.com/flipavenueug/"
            target="_blank">Instagram</a >
        </li>
        <li>
                <a href="https://twitter.com/flipavenueug"
                  target="_blank">X</a >
              </li>
              <li>
                <a href="https://www.linkedin.com/company/flip-avenue/"
                  target="_blank">LinkedIn</a >
              </li>
      </ul>
      <div class="main-menu">
        <ul>
                <li><a href="index.htm">Home</a></li>
                <li><a href="journey.htm">Our Journey</a></li>
                <li><a href="portfolio.htm">Accomplishments</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="contact.htm">Get in Touch</a></li>
              </ul>
        <div class="controls">
          <ul class="soci cf">
            <li>
              <a
                href="https://www.facebook.com/InColor-Interijeri-i-Kuhinje-761042037358841/"
                target="_blank"
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <div id="app" data-method="introAnimations" class="classic-single">
      <div
        class="home-intro single"
        data-method="singleIntroController"
        data-image="https://incolor-kuhinje.hr/wp-content/themes/incolor-wp/public/img/bg/classic-bg.jpg"
        data-displacement="https://incolor-kuhinje.hr/wp-content/themes/incolor-wp/public/img/bg/classic-bg-depthmap.png">
        <div class="canvas-wrap">
          <div
            class="mobile-img"
            style="
              background-image: url(../wp-content/themes/incolor-wp/public/img/bg/classic-bg.jpg);
            "
          ></div>
          <canvas id="canvas" class="canvas"></canvas>
        </div>
        <div class="cnt">
          <h1 class="main-title">Shop</h1>
        </div>
        <div class="scroll-indicator" data-method="scrollIndicator">
          <span></span>
        </div>
      </div>
   
      <div class="untree_co-section product-section before-footer-section">
        <div class="container">
              <div class="row">

                  <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Elephant Planter.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Elephant Planter</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div> 
                <!-- End Column 1 -->
                    
                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                      <img src="Edited/Giraffe Planter.jpg" class="img-fluid product-thumbnail">
                      <h3 class="product-title">Giraffe Planter</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div> 
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Metallic gold Butterfly wall hooks.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Metallic gold Butterfly wall hooks</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Giraffe Planter.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Giraffe Planter</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->


                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Meditating Astronaut.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Meditating Astronaut</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div> 
                <!-- End Column 1 -->
                    
                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Cream Globe.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Cream Globe</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div> 
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Bear with plate keyholder.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Bear with plate keyholder</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="cart.php">
                        <img src="Edited/Flower Curtain Holders.jpg" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Flower Curtain Holders</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                  <a class="product-item" href="cart.php">
                      <img src="Edited/Wooden Mouse Bookshelf.jpg" class="img-fluid product-thumbnail">
                      <h3 class="product-title">Wooden Mouse Bookshelf</h3>
                      <strong class="product-price">$50.00</strong>

                      <span class="icon-cross">
                          <img src="images/cross.svg" class="img-fluid">
                      </span>
                  </a>
              </div> 
              <!-- End Column 1 -->
                  
              <!-- Start Column 2 -->
              <div class="col-12 col-md-4 col-lg-3 mb-5">
                  <a class="product-item" href="cart.php">
                      <img src="Edited/Wall Mount Butterfly Light.jpg" class="img-fluid product-thumbnail">
                      <h3 class="product-title">Wall Mount Butterfly Light</h3>
                      <strong class="product-price">$50.00</strong>

                      <span class="icon-cross">
                          <img src="images/cross.svg" class="img-fluid">
                      </span>
                  </a>
              </div> 
              <!-- End Column 2 -->

              <!-- Start Column 3 -->
              <div class="col-12 col-md-4 col-lg-3 mb-5">
                  <a class="product-item" href="cart.php">
                      <img src="Edited/Translucent Saving Boxes.jpg" class="img-fluid product-thumbnail">
                      <h3 class="product-title">Translucent Saving Boxes</h3>
                      <strong class="product-price">$78.00</strong>

                      <span class="icon-cross">
                          <img src="images/cross.svg" class="img-fluid">
                      </span>
                  </a>
              </div>
              <!-- End Column 3 -->

              <!-- Start Column 4 -->
              <div class="col-12 col-md-4 col-lg-3 mb-5">
                  <a class="product-item" href="cart.php">
                      <img src="Edited/Multipurpose Side Rugs.jpg" class="img-fluid product-thumbnail">
                      <h3 class="product-title">Multipurpose Side Rugs</h3>
                      <strong class="product-price">$43.00</strong>

                      <span class="icon-cross">
                          <img src="images/cross.svg" class="img-fluid">
                      </span>
                  </a>
              </div>
              

              <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="cart.php">
                    <img src="Edited/Lego Clock.jpg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Lego Clock</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div> 
            <!-- End Column 1 -->
                
            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="cart.php">
                    <img src="Edited/Multipurpose Drawer Organizers.jpg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Multipurpose Drawer Organizers</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="cart.php">
                    <img src="Edited/Natural Wood Bear Hanger Set.jpg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Natural Wood Bear Hanger Set</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="cart.php">
                    <img src="Edited/J Multicolored Wall Hooks.jpg" class="img-fluid product-thumbnail">
                    <h3 class="product-title">J Multicolored Wall Hooks</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-3 mb-5">
              <a class="product-item" href="cart.php">
                <img src="Edited/Minimalistic White Clock.jpg" class="img-fluid product-thumbnail">
                  <h3 class="product-title">Minimalistic White Clock</h3>
                  <strong class="product-price">$50.00</strong>

                  <span class="icon-cross">
                      <img src="images/cross.svg" class="img-fluid">
                  </span>
              </a>
          </div> 
          <!-- End Column 1 -->
              
          <!-- Start Column 2 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5">
              <a class="product-item" href="cart.php">
                  <img src="Edited/Twisted Elephant Table piece.jpg" class="img-fluid product-thumbnail">
                  <h3 class="product-title">Twisted Elephant Table piece</h3>
                  <strong class="product-price">$50.00</strong>

                  <span class="icon-cross">
                      <img src="images/cross.svg" class="img-fluid">
                  </span>
              </a>
          </div> 
          <!-- End Column 2 -->

          <!-- Start Column 3 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5">
              <a class="product-item" href="cart.php">
                  <img src="Edited/Study Table Organizers.jpg" class="img-fluid product-thumbnail">
                  <h3 class="product-title">Study Table Organizers</h3>
                  <strong class="product-price">$78.00</strong>

                  <span class="icon-cross">
                      <img src="images/cross.svg" class="img-fluid">
                  </span>
              </a>
          </div>
          <!-- End Column 3 -->

          <!-- Start Column 4 -->
          <div class="col-12 col-md-4 col-lg-3 mb-5">
              <a class="product-item" href="cart.php">
                  <img src="Edited/Pencil Holder Astronaut.jpg" class="img-fluid product-thumbnail">
                  <h3 class="product-title">Pencil Holder Astronaut</h3>
                  <strong class="product-price">$43.00</strong>

                  <span class="icon-cross">
                      <img src="images/cross.svg" class="img-fluid">
                  </span>
              </a>
          </div>


          <div class="col-12 col-md-4 col-lg-3 mb-5">
            <a class="product-item" href="cart.php">
              <img src="Edited/Black and Gold Globe.jpg" class="img-fluid product-thumbnail">
                <h3 class="product-title">Black and Gold Globe</h3>
                <strong class="product-price">$50.00</strong>

                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            </a>
        </div> 
        <!-- End Column 1 -->
            
        <!-- Start Column 2 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
            <a class="product-item" href="cart.php">
                <img src="Edited/Black Mousy Hanger Set.jpg" class="img-fluid product-thumbnail">
                <h3 class="product-title">Black Mousy Hanger Set</h3>
                <strong class="product-price">$50.00</strong>

                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            </a>
        </div> 
        <!-- End Column 2 -->

        <!-- Start Column 3 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
            <a class="product-item" href="cart.php">
                <img src="Edited/Pink Mouse Hanger Set.jpg" class="img-fluid product-thumbnail">
                <h3 class="product-title">Pink Mouse Hanger Set</h3>
                <strong class="product-price">$78.00</strong>

                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            </a>
        </div>
        <!-- End Column 3 -->

        <!-- Start Column 4 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5">
            <a class="product-item" href="cart.php">
                <img src="Edited/Wall Mount Bedside Light.jpg" class="img-fluid product-thumbnail">
                <h3 class="product-title">Wall Mount Bedside Light</h3>
                <strong class="product-price">$43.00</strong>

                <span class="icon-cross">
                    <img src="images/cross.svg" class="img-fluid">
                </span>
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="cart.php">
            <img src="Edited/Minimalistic Gold Metallic Wall Hooks.jpg" class="img-fluid product-thumbnail">
              <h3 class="product-title">Minimalistic Gold Metallic Wall Hooks</h3>
              <strong class="product-price">$50.00</strong>

              <span class="icon-cross">
                  <img src="images/cross.svg" class="img-fluid">
              </span>
          </a>
      </div> 
      <!-- End Column 1 -->
          
      <!-- Start Column 2 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="cart.php">
              <img src="Edited/Wooden Bedside Lamp.jpg" class="img-fluid product-thumbnail">
              <h3 class="product-title">Wooden Bedside Lamp.jpg</h3>
              <strong class="product-price">$50.00</strong>

              <span class="icon-cross">
                  <img src="images/cross.svg" class="img-fluid">
              </span>
          </a>
      </div> 
      <!-- End Column 2 -->

      <!-- Start Column 3 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="cart.php">
              <img src="Edited/Natural wood Animal Wall Hooks_.jpg" class="img-fluid product-thumbnail">
              <h3 class="product-title">Natural wood Animal Wall Hooks</h3>
              <strong class="product-price">$78.00</strong>

              <span class="icon-cross">
                  <img src="images/cross.svg" class="img-fluid">
              </span>
          </a>
      </div>
      <!-- End Column 3 -->

      <!-- Start Column 4 -->
      <div class="col-12 col-md-4 col-lg-3 mb-5">
          <a class="product-item" href="cart.php">
              <img src="Edited/Kitty Planter.jpg" class="img-fluid product-thumbnail">
              <h3 class="product-title">Kitty Planter</h3>
              <strong class="product-price">$43.00</strong>

              <span class="icon-cross">
                  <img src="images/cross.svg" class="img-fluid">
              </span>
          </a>
      </div>

      <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="cart.php">
          <img src="Edited/J wooden Wall Hooks.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Minimalistic Gold Metallic Wall Hooks</h3>
            <strong class="product-price">$50.00</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
    </div> 
    <!-- End Column 1 -->
        
    <!-- Start Column 2 -->
    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="cart.php">
            <img src="Edited/Floating Butterfly Shelf.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Floating Butterfly Shelf.jpg</h3>
            <strong class="product-price">$50.00</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
    </div> 
    <!-- End Column 2 -->

    <!-- Start Column 3 -->
    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="cart.php">
            <img src="Edited/J Colored Wall Hooks.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">J Colored Wall Hooks</h3>
            <strong class="product-price">$78.00</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
    </div>
    <!-- End Column 3 -->

    <!-- Start Column 4 -->
    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="cart.php">
            <img src="Edited/Black Bedside Lamp with wireless charging spot.jpg" class="img-fluid product-thumbnail">
            <h3 class="product-title">Black Bedside Lamp with wireless charging spot</h3>
            <strong class="product-price">$43.00</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
    </div>




    <div class="col-12 col-md-4 col-lg-3 mb-5">
      <a class="product-item" href="cart.php">
        <img src="Edited/Praying Astronaut.jpg" class="img-fluid product-thumbnail">
          <h3 class="product-title">Praying Astronaut</h3>
          <strong class="product-price">$50.00</strong>

          <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
          </span>
      </a>
  </div> 
  <!-- End Column 1 -->
      
  <!-- Start Column 2 -->
  <div class="col-12 col-md-4 col-lg-3 mb-5">
      <a class="product-item" href="cart.php">
          <img src="Edited/Animal wall hooks.jpg" class="img-fluid product-thumbnail">
          <h3 class="product-title">Animal wall hooks.jpg</h3>
          <strong class="product-price">$50.00</strong>

          <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
          </span>
      </a>
  </div> 
  <?php
      $sql = "SELECT id, photo_path, iname, item, price FROM photos";
      $result = mysqli_query($conn, $sql);
      
      if ($result) {
          // Fetch each row from the result set
          while ($row = mysqli_fetch_assoc($result)) {
              // Access photo_path, item, and price from each row
            
              $photo_path = "dashboard/" . $row['photo_path'];
              $iname = $row['iname'];
              $item = $row['item'];
              $price = $row['price'];
  ?>
      <div class="col-12 col-md-4 col-lg-3 mb-5">
      <?php echo "<a class='product-item' href='?order_id={$row['id']}'>"; ?>
          <?php echo "<img src=' $photo_path' class='img-fluid product-thumbnail'>"; ?>
          <h3 class="product-title"><?php echo $iname; ?></h3>
          <h3 class="product-title"><?php echo $item; ?></h3>
          <strong class="product-price"><?php echo $price; ?> </strong>

          <span class="icon-cross">
              <img src="images/cross.svg" class="img-fluid">
          </span>
      </a>
      </div>
      <?php
      
    }
} else {
    $errorMessage = "Error executing query: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
echo $errorMessage;
?>
  
  <!-- End Column 3 -->


  <!-- Start Column 4 -->
  


              </div>
        </div>
    </div>





      
    <div class="footer">
      <div class="inner-footer">
    
    <!--  for company name and description -->
        
    
    <!--  for quick links  -->
        <div class="footer-items">
          <h3>Quick Links</h3>
          <div class="border1"></div> <!--for the underline -->
            <ul>
              <a href="index.htm"><li>Home</li></a>
              <a href="journey.htm"><li>Our Journey</li></a>
              <a href="contact.htm"><li>Get in Touch</li></a>
              <a href="portfolio.htm"><li>Portfolio</li></a>
            </ul>
        </div>
    
    <!--  for some other links -->
        <div class="footer-items">
          <h3>Get To know More</h3>
          <div class="border1"></div>  <!--for the underline -->
            <ul>
              <a href="privacy.html"><li>Privacy Policy</li></a>
              <a href="terms.html"><li>Terms and Conditions</li></a>
              <a href="refund.html"><li>Refund Policy </li></a>
              
            </ul>
        </div>
    
    <!--  for contact us info -->
        <div class="footer-items">
          <h3>Keep In Touch</h3>
          <div class="border1"></div>
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i>Kataza Close, Bugolobi , Maria House, behind Airtel Building, Kampala , UG <br>P.O BOX 107258, kampala GPO</li>
              <br>
              <li><i class="fa fa-phone" aria-hidden="true"></i>+256 701380251 / 783370967</li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i>info@flipavenueltd.com</li>
            </ul> 
          
    <!--   for social links -->
            <div class="social-media">
              <a href="https://www.instagram.com/flipavenueug/"><i class="fa fa-instagram"></i></a>
              <a href="https://twitter.com/flipavenueug"><i class="fa fa-twitter"></i></a> 
               <a href="https://www.facebook.com/profile.php?id=61550707256066"><i class="fa fa-facebook"></i></a>
               <a href="https://www.linkedin.com/company/flip-avenue/"><i class="fa fa-linkedin"></i></a>
            </div> 
        </div>
      </div>
      
    <!--   Footer Bottom start  -->
      <div class="footer-bottom">
        Copyright &copy; Flip Avenue Limited.
      </div>
    </div>


    
  
    
 <script src="js/script.js"></script>
      <script src="../wp-content/themes/incolor-wp/public/js/plugins/throwProps.js"></script>
    <script
      type="text/javascript"
      src="../ajax/libs/babel-polyfill/7.0.0/polyfill.min.js?ver=6.26.0"
      id="babel-js"></script>
    <script
      type="text/javascript"
      src="../ajax/libs/Swiper/4.5.0/js/swiper.min.js?ver=4.5.0"
      id="swiper-js"></script>
    <script
      type="text/javascript"
      src="../wp-content/themes/incolor-wp/public/js/app.js?ver=1.0"
      id="app-js"></script>
    <script
      type="text/javascript"
      src="../wp-includes/js/wp-embed.min.js?ver=5.6.11"
      id="wp-embed-js"></script>
  </body>
</html>
