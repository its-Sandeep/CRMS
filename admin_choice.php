
<!DOCTYPE html>
<html>
<head>

<title>Administator Home</title>
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
    <button class="button2" style="vertical-align:middle"><span><a href="log_out.php">Log Out</a></span></button>

   </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>
          <li><a href="admin_station.php">Station</a></li>
          <li><a href="admin_officer.php">Officer</a></li>
          <li><a href="admin_crime.php">Crime</a></li>
          <li><a href="admin_user/user_insert.php">User</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Welcome Administator </h1>
      <br><br>
      <p> Please choose your option from the navigation menu </p>
      <br>
      <ul>
        <li>Select <b>Station</b> for Station related options</li> <br>
        <li>Select <b>Officer</b> for Police Officer related options</li> <br>
        <li>Select <b>Crime</b> for Crime related options from the database</li> <br>
        <li>Select <b>User</b> for inserting a new User into the database </li> <br>
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
