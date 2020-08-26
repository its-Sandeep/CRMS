
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

      <h1> View Officer </h1>
      <br>
      <p> Please select the sation from which you want to view the police officer</p>


      <?php
        // this is to view a list of Stations and to display it on the web page

        $conn = new mysqli("localhost","root", "", "criminal");
        //Check link to the mysql server
        if($conn->error) {
          die('Failed to connect to server: ' . $conn->error);
        }

        //Select database
        //$db = mysql_select_db('test');

        // for the selection of the station
        $sql = "SELECT * FROM station ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          $station_id_array = array_fill(0, 10, 0);
          $station_name_array = array_fill(0, 10, "");

          echo "</table>";
          // displaying the info to enter the station
          echo '<form action="officer_view.php" method="post">';
          echo '<br>
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
                <input type="submit" name = "submit" value="Submit">';
          echo '</form>';
          echo '<br><br><br>';

        // code to display the result of the paritcular station
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

          // to display the info about the officer from the database

          if (isset($_POST['submit']) && $_POST['station_id']) {
            // this is the code when the submit button is pressed

            $station_id = $_POST["station_id"];
            $sql = "SELECT *
                    FROM officer, person_id
                    where officer.p_id = person_id.p_id
                    and officer.station_id = '$station_id' ";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                echo "<table id='customers'>
                      <tr>
                      <th>OfficerID</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Contact</th>
                      <th>Address</th>
                      </tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["officer_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["designation"]. "</td><td>" . $row["contact"] ."</td><td>" . $row["address"] ."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
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
