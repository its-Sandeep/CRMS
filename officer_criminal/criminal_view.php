
<!DOCTYPE html>
<html>
<head>

<title>Criminal View</title>
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
    <button class="button button1" style="vertical-align:middle"><span><a href="../officer_menu.php">Officer Home</a></span></button>
    <button class="button button2" style="vertical-align:middle"><span><a href="../log_out.php">Log Out</a></span></button>
  </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>
          <li><a href="criminal_add.php">Add</a></li>
          <li><a href="criminal_view.php">View</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Criminal List </h1>

        <br>
        <?php

          session_start();
          error_reporting(E_ALL ^ E_NOTICE);



            $conn = new mysqli("localhost","root", "", "criminal");
            //Check link to the mysql server
            if($conn->error) {
              die('Failed to connect to server: ' . $conn->error);
            }

              $sql = "SELECT *
                      FROM criminal, person_id, crime, cases
                      where criminal.p_id = person_id.p_id
                      and   criminal.crime_id = crime.crime_id
                      and   cases.cases_id = criminal.cases_id ";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                //$_SESSION['officer_id'] = $_POST["officer_id"];
                  echo "<h2> Criminal details :- </h2><br>";
                  echo "<table id='customers'>
                        <tr>
                        <th>Case ID</th>
                        <th>Criminal Name</th>
                        <th>Crime</th>
                        <th>Case Name</th>
                        <th>Case Status</th>
                        </tr>";
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["cases_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["crime_type"]."</td><td>" . $row["cases_name"]."</td><td>" . $row["status"]. "</td></tr>";
                  }
                  echo "</table>";

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
