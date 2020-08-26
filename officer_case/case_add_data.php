<?php
  //Start the session to see if the user is authencticated user.
session_start();

  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){

  $fir_id = $_POST['fir_id'];
  $station_id = $_POST['station_id'];
  $case_name = $_POST['case_name'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



  $quer = " insert into cases(cases_name,status,station_id,fir_id)
            VALUES
            ('$case_name','Pending','$station_id','$fir_id');
            ";



if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('case_add.php');
  echo'<script>
          function myFunction() {
              alert(" Case Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('case_add.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to insert the Case please try again !!!");
          }
          myFunction();
       </script>';
       echo "connection->error";

}
}

?>
