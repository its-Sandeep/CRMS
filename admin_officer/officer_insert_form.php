
<!DOCTYPE html>
<html>
<head>

<title>Officer Insert</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
    <button class="button button1" style="vertical-align:middle"><span><a href="../admin_menu.php">Admin Home</a></span></button>
    <button class="button button1" style="vertical-align:middle"><span><a href="../admin_officer.php">Officer Home</a></span></button>
    <button class="button button2" style="vertical-align:middle"><span><a href="../log_out.php">Log Out</a></span></button>
  </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>

        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Officer Insert Choice </h1>
      <br><br>
      Fill the details given below :-
      <br><br>
      <div class="details">
        <form action="officer_insert_form.php" method="post">
          <b>Officer PersonID :</b> <br>
          <input type="text" id="fname" name="p_id" placeholder="PersonID of the Officer from the database">
          <br>
          <button class="button button3" name = "check" type="submit"  value="check"> Check </button>
        </form>

          <?php

            session_start();
            error_reporting(E_ALL ^ E_NOTICE);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

              // to display the info about the officer from the database
              $conn = new mysqli("localhost","root", "", "criminal");
              //Check link to the mysql server
              if($conn->error) {
                die('Failed to connect to server: ' . $conn->error);
              }

              if (isset($_POST['check']) && $_POST['p_id']) {
                // this is the code when the check button is pressed
                $p_id = $_POST["p_id"];
                $sql = "SELECT * FROM person_id where p_id = '$p_id' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                  $_SESSION['pid'] = $p_id;

                    echo "<table id='customers'>
                          <tr>
                          <th>Person ID</th>
                          <th>Name</th>
                          <th>Date of Birth</th>
                          <th>Contact</th>
                          <th>Gender</th>
                          </tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["p_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["dob"]."</td><td>" . $row["contact"]."</td><td>" . $row["gender"]. "</td></tr>";
                    }


                    // query to get station names
                    $sql = "SELECT * FROM station ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                      $station_id_array = array_fill(0, 10, 0);
                      $station_name_array = array_fill(0, 10, "");

                      echo "</table>";
                      // displaying the info to enter the station
                      echo '<form action="officer_insert_data.php" method="post">';
                      echo '<br><br><br>
                            <b>Station Name :</b><br>
                            <select id="lname" name="station_id" placeholder="Place of the Station">';

                      //to get the station id

                      $count = 0;

                        while($row = $result->fetch_assoc()) {
                            $station_id_array = $row['station_id'];
                            $station_name_array = $row['station_name'];
                            echo  '<option value='.$row['station_id']. '>'.$row['station_name']. '</option>';
                            $count++;
                        }

                      }
                    echo '</select>
                          <br><br>
                          <b>Desigination :</b><br>
                          <input type="text" id="lname" name="desigination" placeholder="Officer Desigination" required>
                          <br><br>
                          <input type="submit" value="Submit">';
                          echo '</form>';
                } else {
                    echo "<p> Person not found in the database Please first create the ID in the Create Person Option";
                }
              }
            }

           ?>


      </div>

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
