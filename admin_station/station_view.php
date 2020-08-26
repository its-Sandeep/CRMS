
<!DOCTYPE html>
<html>
<head>

<title>Admin Station Choice</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

<!-- Begin Wrapper -->
<div id="wrapper">

  <!-- Begin Header -->
  <div id="header"><h1>Criminal Record Management System</h1></div>
  <!-- End Header -->

  <!-- Begin Navigation -->
  <div id="navigation">
  <button class="button" style="vertical-align:middle"><span><a href="../admin_menu.php">Admin Home</a></span></button>
  <button class="button" style="vertical-align:middle"><span><a href="../admin_station.php">Station Home</a></span></button>
  <button class="button2" style="vertical-align:middle"><span><a href="../log_out.php">Log Out</a></span></button>
  </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>
          <li><a href="station_insert.php">Insert Station</a></li>
          <li><a href="station_view.php">View Stations</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> View Station </h1>

      <br><br>

      <?php
        // this is to view a list of Stations and to display it on the web page

        $conn = new mysqli("localhost","root", "", "criminal");
        //Check link to the mysql server
        if($conn->error) {
          die('Failed to connect to server: ' . $conn->error);
        }

        //Select database
        //$db = mysql_select_db('test');


        $sql = "SELECT * FROM station";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table id='customers'>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Location</th>
                  </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["station_id"]. "</td><td>" . $row["station_name"]. "</td><td>" . $row["station_location"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }


      ?>

    </div>
    <!-- End Right Column -->

    </div>
    <!-- End Faux Columns -->

  <!-- Begin Footer -->
  <div id="footer"> This is the Footer </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
