
<!DOCTYPE html>
<html>
<head>

<title>Crime Insert</title>
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
    <button class="button button1" style="vertical-align:middle"><span><a href="../admin_crime.php">Crime Home</a></span></button>
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

      <h1> Crime Insert Choice </h1>
      <br><br>
      Fill the details given below :-
      <br><br>
      <div class="details">
        <form action="crime_insert_data.php" method="post">
          <b>Crime Name :</b> <br>
          <input type="text" id="fname" name="crime_type" placeholder="Crime Name">
          <br>
          <button class="button button3" name = "submit" type="submit"  value="check"> Insert </button>
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
