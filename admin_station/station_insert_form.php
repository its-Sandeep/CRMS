
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
          
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Station Insert Choice </h1>
      <br><br>
      Fill the details given below :-
      <br><br>
      <div class="details">
        <form action="station_insert_data.php" method="post">
          <b>Station Name :</b> <br>
          <input type="text" id="fname" name="station_name" placeholder="Name of the Station">

          <br><br><br>
          <b>Station Location :</b><br>
          <input type="text" id="lname" name="place" placeholder="Place of the Station">
          <br><br>
          <input type="submit" value="Submit">
        </form>
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
