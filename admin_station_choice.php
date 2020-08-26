
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
  <button class="button" style="vertical-align:middle"><span><a href="admin_menu.php">Admin Home</a></span></button>
  <button class="button" style="vertical-align:middle"><span><a href="admin_station.php">Station Home</a></span></button>
  <button class="button2" style="vertical-align:middle"><span><a href="log_out.php">Log Out</a></span></button>
  </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>
          <li><a href="admin_station/station_insert.php">Insert Station</a></li>
          <li><a href="admin_station/station_view.php">View Stations</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Admin Station Choice </h1>

      <br><br>
      <p> Please choose your option from the navigation menu </p>
      <br>
      <ul>
        <li>Select <b>Insert</b> for inserting a new Station into the database</li> <br>
        <li>Select <b>Update</b> for Updating the Station information in the database</li> <br>
        <li>Select <b>User</b> for User related options in the Database</li> <br>
      </ul>

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
