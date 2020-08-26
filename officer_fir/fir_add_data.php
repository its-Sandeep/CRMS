<?php
  //Start the session to see if the user is authencticated user.
session_start();

  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){

  $officer_id = $_POST['officer_id'];
  $cp_id = $_POST['cp_id'];
  $vp_id = $_POST['vp_id'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $description = $_POST['description'];
  $place = $_POST['place'];
  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



  $quer = "
              insert into fir (incident_date,incident_time,incident_place,description,status,officer_id)
              values ('$date', '$time', '$place', '$description', 'investigating', '$officer_id');";
  $connection->query($quer);

  $f_id =$connection->insert_id ;
  $quer = "insert  into victim(fir_id,p_id)
    			  values ('$f_id','$vp_id');
          ";
  $connection->query($quer);
  $quer = "insert  into complainant(fir_id,p_id)
    			  values ('$f_id','$cp_id');
          ";
  $connection->query($quer);


if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('fir_add.php');
  echo'<script>
          function myFunction() {
              alert(" Fir Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('fir_add.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to insert the Fir please try again !!!");
          }
          myFunction();
       </script>';
       echo "connection->error";

}
}

?>
