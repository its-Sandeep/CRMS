
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
  <div id="navigation">
  <button class="button" style="vertical-align:middle"><span><a href="admin_menu.php">Admin Home</a></span></button>
  <button class="button" style="vertical-align:middle"><span><a href="admin_officer.php">Officer Home</a></span></button>
  </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>
          <li><a href="admin_officer/officer_insert.php">Insert</a></li>
          <li><a href="admin_officer/officer_update.php">Update</a></li>
          <li><a href="admin_officer/officer_view.php">View</a></li>
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Admin Officer Choice </h1>

      <br><br>
      <p> Please choose your option from the navigation menu </p>
      <br>
      <ul>
        <li>Select <b>Insert</b> for inserting a new Officer into the database</li> <br>
        <li>Select <b>Update</b> for Updating the Officer information in the database</li> <br>
        <li>Select <b>Delete</b> for User deleting a Officer from the Database</li> <br>
        <li>Select <b>View</b> for User Viewing a Officer from the Database</li> <br>
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
