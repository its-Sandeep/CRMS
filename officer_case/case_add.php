
<!DOCTYPE html>
<html>
<head>

<title>Case Insert</title>
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

        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> Add Case </h1>
      <br><br>
      Fill the details given below :-
      <br><br>

      <div class="container">
        <form action="case_add_data.php" method="post">

          <div class="row">
            <div class="col-25">
              <label for="fname">Case Name : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="case_name" placeholder="Name of the Case (description)" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Station ID : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="station_id" placeholder="Station ID of the Police Station" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">FIR ID : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fir_id" placeholder="FIR ID from which case is taken" required>
            </div>
          </div>
          <br>
          <div class="row">
            <input type="submit" name="submit" value="Submit">
          </div>
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
