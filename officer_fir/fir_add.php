
<!DOCTYPE html>
<html>
<head>

<title>FIR Insert</title>
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

      <h1> Add FIR </h1>
      <br><br>
      Fill the details given below :-
      <br><br>

      <div class="container">
        <form action="fir_add_data.php" method="post">

          <div class="row">
            <div class="col-25">
              <label for="fname">OfficerID : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="officer_id" placeholder="OfficerID of the Officer" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Complainant PersonID : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="cp_id" placeholder="Complainant PersonID" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Victim PersonID : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="vp_id" placeholder="Victim PersonID" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="lname">Date of Incident :</label>
            </div>
            <div class="col-75">
              <input type="date" id="lname" name="date" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="lname">Time of Incident :</label>
            </div>
            <div class="col-75">
              <input type="time" id="lname" name="time" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Place : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="place" placeholder="Place" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
            <label for="subject">Description :</label>
            </div>
            <div class="col-75">
            <textarea id="subject" name="description" placeholder="Description" style="height:200px" required></textarea>
            </div>
          </div>

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
