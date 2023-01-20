<?php

include('connect.php');
echo "hello";	

if(isset($_POST['submit']))
{
      echo "hello";	
      $username = $_POST['username'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $std = $_POST['std'];
      if(isset($_POST['photo'])){
            echo "hello";	
            $image = $_POST['photo']['name'];
            $tmp_name = $_POST['photo']['tmp_name'];
            print_r($_POST['photo']);

            if($password == $cpassword)
            {
                  print_r($_POST['photo']);
            $query = "INSERT INTO `userdata`(`username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) 
            VALUES ('$username','$mobile','$password','$image','$std','$votes', 0,0)";
            $result = mysqli_query($conn,$query);
                  if($result)
                  {   
                  echo '
                              <script> alert(Registration successfull);
                              windoe.location="../partials/registration.php"; </script> ';
                        move_uploaded_file($tmp_name,"../upholds/$image");
                        header('location:../index.php');
                  }
                  else
                  {  
                        echo "Error";
                  }
            }
            else
            {
                  echo '<script> alert(Password didnt match);
                        windoe.location="../partials/registration.php"; </script> ';
            }
}
}	
else
{
      echo "hello";	
      echo '<script> alert(Select your photo);
            windoe.location="../partials/registration.php"; </script> ';
}
?>
