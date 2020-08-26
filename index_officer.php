
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
  <div id="navigation">
    <button class="button" style="vertical-align:middle"><span><a href="index_home.php">Home</a></span></button>
   </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">
      <div class="column menu">
        <ul>

          <li><a href="index_officer.php">Police Officer</a></li>
          <li><a href="index_admin.php">Administrator</a></li>
          
        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">
      <h1> Welcome to Officer Login Page </h1>
      <br><br>
      <p> Please enter the User Name and Password in the given fields to proceed further </p>
      <div class = "login_details">
        <form action = "login_officer.php" method = "post">
            <b id = "login_text" >User Name : </b> <br>
          <input type="text" name="user_name" placeholder="User Name">
          <br>
            <b id="login_text">Password : </b>
          <input type="password" name="password" >
          <br><br>
          <input type ="submit" name="submit" value="Login">
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

<script>
function myFunction() {
alert("I am an alert box!");
}

</script>

</body>
</html>
