
<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>

<title>Main Index</title>
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
  <div id="navigation"> Navigation Here </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">
      <button class="button" style="vertical-align:middle"><span><a href="index_home.php">Home</a></span></button>
      <div class="column menu">
        <ul>
          <li><a href="index_normal.php">Normal User</a></li>
          <li><a href="index_officer.php">Police Officer</a></li>
          <li><a href="index_admin.php">Administrator</a></li>
          <li><a href="index_new.php">Add User_id Database</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Add new user into the Database </h1>

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
