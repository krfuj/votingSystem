<?php

/* Connecting to the database. */
$con = new mysqli('localhost', 'root', '', 'votingsystem');

if ($con->connect_error) {

    die('Connection Failed : ' . $con->connect_error);
}


// if(isset($_POST['photo'])){
//       $image = $_POST['photo']['name'];
//       $tmp_name = $_POST['photo']['tmp_name'];

//       if($password!=$cpassword){
//             echo '
//             <script> alert(Password didnt match);
//             windoe.location="../partials/registration.php"; </script> ';
//       }
//   }


?>