<?php
  //Start the session to see if the user is authencticated user.
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
  //include the menu
  //require('menu.php');

  $station_id = $_POST['station_id'];
  $desigination = $_POST['desigination'];
  $officer_id = $_SESSION['officer_id'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



$quer = "UPDATE officer
         SET designation = '$desigination', station_id = '$station_id'
         WHERE officer_id = '$officer_id' ";

if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('officer_update_form.php');
  echo'<script>
          function myFunction() {
              alert(" Officer Updated Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('officer_update_form.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to update the officer please try again !!!");
          }
          myFunction();
       </script>';
  exit();
}
}

?>
