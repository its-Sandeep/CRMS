<?php
  //Start the session to see if the user is authencticated user.
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
  //include the menu
  //require('menu.php');
  $station_id = $_POST['station_id'];
  $p_id = $_SESSION['pid'];
  $desigination = $_POST['desigination'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



$quer = "insert into officer(designation,	station_id,	p_id) values ('$desigination', '$station_id', '$p_id')";

if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('officer_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" Officer Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('officer_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to insert the officer please try again !!!");
          }
          myFunction();
       </script>';
  exit();
}
}

?>
