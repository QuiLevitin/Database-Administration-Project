<?php 

session_start();

if (!isset($_SESSION['DealerCode'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Personal Collection-Home</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css?version=51" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand">
            <span>
              <?php echo "<h1>Hello " . $_SESSION['DealerCode'] . "!</h1>"; ?>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="products.php"> Products </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="orders.php"> Orders </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="account.php"> Account </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>



      <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-2">
            <div class="about_detail-box">
              <h3 class="custom_heading ">
                Personal Collection Direct Selling, Inc.
              </h3>
              <p class="">

Personal Collection or PC is a direct selling company that provides high quality products and livelihood for thousands through its dealer network.It operates through the commitment of hardworking people who have discovered financial freedom and the Great Life, that is the ultimate incentive for doing business with PC. The head office is in Ground Floor Triumph Building, 1610 Quezon Avenue, Diliman, Quezon City, 1104 Metro Manila. 

              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img src="images/about.png?version=51" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-2">
            <div class="about_detail-box">
              <h3 class="custom_heading ">
                The operation
              </h3>
              <p class="">

Personal Collection is a direct selling incorporation where manufactures deliver the products to the branch’s storage and a distributor or a dealer will invoice an order. After the ordering process, the products will be out in releasing section. These orders are distributed to the recruits or customers of dealers. This process usually occurs once a month before the due date of the sales invoice.


              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img src="images/img2.jpg?version=51" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-2">
            <div class="about_detail-box">
              <h3 class="custom_heading ">
                The policy
              </h3>
              <p class="">

Dealer must be regularly present to the respective branch to assist the recruits and costumers and to manage the sales and orders. There is no delivery option availablesince the dealer or an authorize person must be in the branch for the ordering process. A dealer must pay the invoice amount before the due date ends to prevent corresponding penalties.

              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_img-box">
              <img src="images/img3.png?version=51" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="container-fluid footer_section">
    <p>
      © 2020 All Rights Reserved By
      <a href="https://html.design/">Personal Collection</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>