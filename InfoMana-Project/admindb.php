<?php 

session_start();

if (!isset($_SESSION['AdminName'])) {
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

  <title>Personal Collection - Admin</title>

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
  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

</head>



<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand">
            <span>
              <?php echo "<h1>Hello " . $_SESSION['AdminName'] . "!</h1>"; ?>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="admindb.php"> Database <span class="sr-only">(current)</span></a>
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


<section class="about_section layout_padding-spacer">Dealer Information
</section>


<section class="about_section">

    <table id="products" class="mytable-marg">
      <tr>
      <th>Dealer Code</th>
      <th>Password</th>
      <th>First Name</th>
      <th>Middle Initial</th>
      <th>Last Name</th>
      <th>Tin</th>
      <th>House No</th>
      <th>Street</th>
      <th>Barangay</th>
      <th>City</th>
      <th>Region</th>
      <th>Contact No</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  DealerCode, Password, FirstName, MiddleInitial, LastName, Tin, HouseNumber, Street, Barangay, City, Region, ContactNumber  FROM dealerinfo";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["DealerCode"]. 
                  "</td><td>" . $row["Password"] .
                  "</td><td>" . $row["FirstName"] .
                  "</td><td>" . $row["MiddleInitial"] . 
                  "</td><td>" . $row["LastName"]. 
                  "</td><td>" . $row["Tin"] . 
                  "</td><td>" . $row["HouseNumber"]. 
                  "</td><td>" . $row["Street"]. 
                  "</td><td>" . $row["Barangay"].
                  "</td><td>" . $row["City"].
                  "</td><td>" . $row["Region"].
                  "</td><td>" . $row["ContactNumber"].
                  "</td></tr>" ;
          }
          echo "</table>";
      } else {
          echo "0 results"; 
      }
      $conn->close();
      ?>
    </table>
  </section>
  
  <section class="about_section layout_padding-spacer"> Credit Information
</section>


<section class="about_section">

    <table id="products">
      <tr>
      <th>Card Holder Name</th>
      <th>Dealer Code</th>
      <th>Total Credit Limit</th>
      <th>Previous Balance</th>
      <th>ARBalance</th>
      <th>Available Credit Limit</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  CardHolderName, DealerCode, TotalCreditLimit, PreviousBalance, ARBalance, AvailableCreditLimit  FROM creditinfo";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["CardHolderName"]. 
                  "</td><td>" . $row["DealerCode"]. 
                  "</td><td>" . $row["TotalCreditLimit"]. 
                  "</td><td>" . $row["PreviousBalance"] . 
                  "</td><td>" . $row["ARBalance"]. 
                  "</td><td>" . $row["AvailableCreditLimit"].
                  "</td></tr>" ;
          }
          echo "</table>";
      } else {
          echo "0 results"; 
      }
      $conn->close();
      ?>
    </table>
  </section>

<section class="about_section layout_padding-spacer">Sales Information
</section>


<section class="about_section">

    <table id="products">
      <tr>
      <th>Invoice Number</th>
      <th>Dealer Code</th>
      <th>Order Date</th>
      <th>Due Date</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  InvoiceNumber, DealerCode, OrderDate, DueDate  FROM salesinfo";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["InvoiceNumber"]. 
                  "</td><td>" . $row["DealerCode"]. 
                  "</td><td>" . $row["OrderDate"]. 
                  "</td><td>" . $row["DueDate"] . 
                  "</td></tr>";
          }
          echo "</table>";
      } else {
          echo "0 results"; 
      }
      $conn->close();
      ?>
    </table>
  </section>
    

<section class="about_section layout_padding-spacer">Payment Information
</section>

  <section class="about_section">

    <table id="products">
      <tr>
      <th>Invoice Number</th>
      <th>Invoice Amount</th>
      <th>Advance Payment</th>
      <th>AR Balance</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  InvoiceNumber, InvoiceAmount, AdvancePayment, ARBalance  FROM paymentinfo ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["InvoiceNumber"]. 
                  "</td><td>" . $row["InvoiceAmount"]. 
                  "</td><td>" . $row["AdvancePayment"] . 
                  "</td><td>" . $row["ARBalance"] . 
                  "</td></tr>" ;
          }
          echo "</table>";
      } else {
          echo "0 results"; 
      }
      $conn->close();
      ?>
    </table>
  </section>

<section class="about_section layout_padding-spacer">Product Information
</section>

  <section  class="about_section">

    <table id="products">
      <tr>
      <th>Product Number</th>
      <th>Product Code</th>
      <th>Invoice Number</th>
      <th>Description</th>
      <th>Product Type</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Gross Amount</th>
      <th>Discount</th>
      <th>Net Amount</th>
      <th>Factored Amount</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT ProductNumber, ProductCode, InvoiceNumber, Description, ProductType, Quantity, Price, GrossAmount, Discount, NetAmount, FactoredAmount  FROM productinfo";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["ProductNumber"]. 
                  "</td><td>" . $row["ProductCode"] .
                  "</td><td>" . $row["InvoiceNumber"] .
                  "</td><td>" . $row["Description"] . 
                  "</td><td>" . $row["ProductType"]. 
                  "</td><td>" . $row["Quantity"] . 
                  "</td><td>₱ " . $row["Price"]. 
                  "</td><td>₱ " . $row["GrossAmount"].
                  "</td><td>₱ " . $row["Discount"].
                  "</td><td>₱ " . $row["NetAmount"].
                  "</td><td>₱ " . $row["FactoredAmount"].
                  "</td></tr>" ;
          }
          echo "</table>";
      } else {
          echo "0 results"; 
      }
      $conn->close();
      ?>
    </table>
  </section>

<section class="about_section layout_padding-spacer">Sales Total
</section>

<section class="about_section">

    <table id="products">
      <tr>
      <th>Invoice Number</th>
      <th>Quantity Total</th>
      <th>Gross Amount Total</th>
      <th>Discount Total</th>
      <th>Net Amount Total</th>
      <th>Factored Amount Total</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  InvoiceNumber, QuantityTotal, GrossAmountTotal, DiscountTotal, NetAmountTotal, FactoredAmountTotal  FROM saletotal";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["InvoiceNumber"]. 
                  "</td><td>₱ " . $row["QuantityTotal"].
                  "</td><td>₱ " . $row["GrossAmountTotal"].
                  "</td><td>₱ " . $row["DiscountTotal"].
                  "</td><td>₱ " . $row["NetAmountTotal"].
                  "</td><td>₱ " . $row["FactoredAmountTotal"].
                  "</td></tr>" ;
          }
          echo "</table>";
      } else {
          echo "0 results"; 
      }
      $conn->close();
      ?>
    </table>
  </section>




<section class="about_section layout_padding-spacer">
</section>



<section class="about_section layout_padding-bottom">
</section>

 

  <section class="container-fluid footer_section">
    <p>
      © 2020 All Rights Reserved By
      <a href="https://html.design/">Personal Collection</a>
    </p>
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>