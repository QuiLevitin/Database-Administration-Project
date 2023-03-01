    <script>
      $(document).ready(function() {

              $(".texthide1").toggle(200, function() {});
          $(".toggle-btn1").click(function() {
              $(".texthide1").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn1 selbtn">Display Total By Product Type</button>
  </div>

  <section  class="about_section texthide1">

    <table id="products">
      <tr>
      <th>Product Type</th>
      <th>SUM(Quantity)</th>
      <th>SUM(Price)</th>
      <th>SUM(GrossAmount)</th>
      <th>SUM(Discount)</th>
      <th>SUM(NetAmount)</th>
      <th>SUM(FactoredAmount)</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      // if (isset($_POST['displayType'])) {
        $sql = "SELECT productinfo.ProductType, SUM(Quantity), SUM(Price), SUM(GrossAmount), SUM(Discount), SUM(NetAmount), SUM(FactoredAmount)  
        FROM productinfo, salesinfo
        WHERE productinfo.InvoiceNumber = salesinfo.InvoiceNumber 
        AND salesinfo.DealerCode = '$DealerCode'
        GROUP BY ProductType";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ProductType"]. 
                  "</td><td>" . $row["SUM(Quantity)"].
                  "</td><td>₱ " . $row["SUM(Price)"].
                  "</td><td>₱ " . $row["SUM(GrossAmount)"].
                  "</td><td>₱ " . $row["SUM(Discount)"].
                  "</td><td>₱ " . $row["SUM(NetAmount)"].
                  "</td><td>₱ " . $row["SUM(FactoredAmount)"].
                  "</td></tr>" ;
            }
            echo "</table>";
        } else {
            echo "0 results"; 
        }
      // }
      $conn->close();
      ?>
    </table>
  </section>

    <script>
      $(document).ready(function() {

              $(".texthide3").toggle(200, function() {});
          $(".toggle-btn3").click(function() {
              $(".texthide3").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn3 selbtn">Display Items by Net Amount less than 500.00</button>
  </div>


  <section  class="about_section texthide3">

    <table id="products">
      <tr>
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
        
        $sql = "SELECT productinfo.ProductCode, productinfo.InvoiceNumber, productinfo.Description, productinfo.ProductType, productinfo.Quantity, productinfo.Price, productinfo.GrossAmount, productinfo.Discount, productinfo.NetAmount, productinfo.FactoredAmount  
                FROM productinfo, salesinfo
                WHERE NetAmount < 500.00
                AND productinfo.InvoiceNumber = salesinfo.InvoiceNumber 
                AND salesinfo.DealerCode = '$DealerCode'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ProductCode"]. 
                  "</td><td>" . $row["InvoiceNumber"].
                  "</td><td>" . $row["Description"].
                  "</td><td>" . $row["ProductType"].
                  "</td><td>" . $row["Quantity"].
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

 <script>
      $(document).ready(function() {

              $(".texthide3").toggle(200, function() {});
          $(".toggle-btn3").click(function() {
              $(".texthide3").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn3 selbtn">Display Items by Factored Amount is between 100.00 and 300.00</button>
  </div>


  <section  class="about_section texthide3">

    <table id="products">
      <tr>
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
        
        $sql = "SELECT productinfo.ProductCode, productinfo.InvoiceNumber, productinfo.Description, productinfo.ProductType, productinfo.Quantity, productinfo.Price, productinfo.GrossAmount, productinfo.Discount, productinfo.NetAmount, productinfo.FactoredAmount  
                FROM productinfo, salesinfo
                WHERE FactoredAmount BETWEEN 100.00 AND 300.00
                AND productinfo.InvoiceNumber = salesinfo.InvoiceNumber 
                AND salesinfo.DealerCode = '$DealerCode'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ProductCode"]. 
                  "</td><td>" . $row["InvoiceNumber"].
                  "</td><td>" . $row["Description"].
                  "</td><td>" . $row["ProductType"].
                  "</td><td>" . $row["Quantity"].
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


















  

    <script>
      $(document).ready(function() {

              $(".texthide1").toggle(200, function() {});
          $(".toggle-btn1").click(function() {
              $(".texthide1").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn1 selbtn">Display Dealer's name  and The Average of GrossAmount of their Invoices</button>
  </div>
<section class="about_section texthide1">

    <table id="products">
      <tr>
      <th>First Name</th>
      <th>Middle Initial</th>
      <th>Last Name</th>
      <th>AVG(GrossAmount)</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT FirstName, MiddleInitial, LastName, AVG(GrossAmount) 
              FROM productinfo, dealerinfo, salesinfo 
              WHERE dealerinfo.DealerCode = salesinfo.DealerCode 
              AND salesinfo.InvoiceNumber = productinfo.InvoiceNumber 
              GROUP BY productinfo.InvoiceNumber";

      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["FirstName"]. 
                  "</td><td>" . $row["MiddleInitial"]. 
                  "</td><td>" . $row["LastName"]. 
                  "</td><td>" . $row["AVG(GrossAmount)"]. 
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


      <script>
      $(document).ready(function() {

              $(".texthide2").toggle(200, function() {});
          $(".toggle-btn2").click(function() {
              $(".texthide2").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn2 selbtn">Sort and Display the dealerinfo  according to their LastName (Descending)</button>
  </div>
<section class="about_section texthide2">

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
      $sql = "SELECT  *
              FROM dealerinfo
              ORDER  BY LastName DESC";
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


      <script>
      $(document).ready(function() {

              $(".texthide3").toggle(200, function() {});
          $(".toggle-btn3").click(function() {
              $(".texthide3").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn3 selbtn">Total Quantity of Products according to their Product Type</button>
  </div>
<section class="about_section texthide3">

    <table id="products">
      <tr>
      <th>Product Type</th>
      <th>SUM(Quantity)</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  ProductType, SUM(Quantity) 
              FROM productinfo
              GROUP BY ProductType";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["ProductType"]. 
                  "</td><td>" . $row["SUM(Quantity)"]. 
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


      <script>
      $(document).ready(function() {

              $(".texthide4").toggle(200, function() {});
          $(".toggle-btn4").click(function() {
              $(".texthide4").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn4 selbtn">Total number of Products according to their Product Code</button>
  </div>
<section class="about_section texthide4">

    <table id="products">
      <tr>
      <th>Product Code</th>
      <th>Description</th>
      <th>Count(*)</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "", "infomana_project");
      // Check connection

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  ProductCode, Description, COUNT(*) 
              FROM productinfo
              GROUP BY ProductCode";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["ProductCode"]. 
                  "</td><td>" . $row["Description"]. 
                  "</td><td>" . $row["COUNT(*)"]. 
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


      <script>
      $(document).ready(function() {

              $(".texthide5").toggle(200, function() {});
          $(".toggle-btn5").click(function() {
              $(".texthide5").toggle(200, function() {});
            });
        });
    </script>
  <div class=" custom_title">
    <button type="button" class="toggle-btn5 selbtn">Display Total By Product Type</button>
  </div>