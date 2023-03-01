<?php 

session_start();

if (!isset($_SESSION['DealerCode'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            }
        th {
            background-color: #588c7e;
            color: white;
            padding: 5px 5px;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['DealerCode'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>

    <table>
    <tr>
    <th>Dealer Code</th>
    <th>First Name</th>
    <th>Middle Initial</th>
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
    $sql = "SELECT DealerCode, LastName, FirstName, MiddleInitial, Tin, HouseNumber, Street, Barangay, City, Region, ContactNumber  FROM dealerinfo";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["DealerCode"]. 
                "</td><td>" . $row["FirstName"] . 
                "</td><td>" . $row["MiddleInitial"]. 
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
</body>
</html>


