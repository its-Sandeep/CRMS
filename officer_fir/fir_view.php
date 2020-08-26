
<!DOCTYPE html>
<html>
<head>

<title>Admin Crime Choice</title>
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
          <li><a href="fir_add.php">Add</a></li>
          <li><a href="fir_view.php">View</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> View FIR </h1>
      <br><br>
        <form action="fir_view.php" method="post">
          <b>FIR ID :</b> <br>
          <input type="text" id="fname" name="fir_id" placeholder="FIR ID you want to see">
          <br>
          <button class="button button3" name = "check" type="submit"  value="check"> Check </button>
        </form>

        <br>
        <br>
        <?php

          session_start();
          error_reporting(E_ALL ^ E_NOTICE);

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $conn = new mysqli("localhost","root", "", "criminal");
            //Check link to the mysql server
            if($conn->error) {
              die('Failed to connect to server: ' . $conn->error);
            }

            if (isset($_POST['check']) && $_POST['fir_id']) {
              // this is the code when the check button is pressed
              $fir_id = $_POST["fir_id"];
              $sql = "SELECT *
                      FROM fir
                      where fir_id = '$fir_id' ";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                //$_SESSION['officer_id'] = $_POST["officer_id"];
                  echo "<h2> FIR details :- </h2><br>";
                  echo "<table id='customers'>
                        <tr>
                        <th>Incident Date</th>
                        <th>Incident Time</th>
                        <th>Place</th>
                        <th>Description</th>
                        <th>Status</th>
                        </tr>";
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["incident_date"]. "</td><td>" . $row["incident_time"]. "</td><td>" . $row["incident_place"]."</td><td>" . $row["description"]."</td><td>" . $row["status"]. "</td></tr>";
                  }
                  echo "</table>";

              }
              else {
                  echo "<p> FIR not found in the database </p>";
              }

              $sql = "SELECT *
                      FROM complainant,person_id
                      where complainant.p_id = person_id.p_id
                      and complainant.fir_id = '$fir_id' ";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                //$_SESSION['officer_id'] = $_POST["officer_id"];
                  echo "<br> <h2> Complainant details :- </h2><br>";
                  echo "<table id='customers'>
                        <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        </tr>";
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["contact"]."</td></tr>";
                  }
                  echo "</table>";

              }

              $sql = "SELECT *
                      FROM victim,person_id
                      where victim.p_id = person_id.p_id
                      and victim.fir_id = '$fir_id' ";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {

                //$_SESSION['officer_id'] = $_POST["officer_id"];
                  echo "<br> <h2> Victims details :- </h2><br>";
                  echo "<table id='customers'>
                        <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        </tr>";
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["contact"]."</td></tr>";
                  }
                  echo "</table>";

              }
            }


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
