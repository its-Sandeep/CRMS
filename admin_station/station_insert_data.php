<?php
  //Start the session to see if the user is authencticated user.
session_start();
  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
  //include the menu
  //require('menu.php');
  $station_name = $_POST['station_name'];
  $location = $_POST['place'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



$quer = "insert into station(station_name, station_location) values ('$station_name', '$location')";

if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('station_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" Station Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
}

?>
