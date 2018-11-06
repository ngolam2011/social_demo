<!DOCTYPE html>
<?php
  $con = mysqli_connect("localhost", "root", "", "social");
  if(mysqli_connect_errno())
  {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  $fname = "";
  $lname = "";
  $em = "";
  $em2 = "";
  $password = "";
  $password2 = "";
  $date = "";
  $error_array = "";

  if(isset($_POST['register_button'])) {
    $fname = strip_tags($_POST['reg_fname']);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));

    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    
    $em = strip_tags($_POST['reg_email']);
    $em = str_replace(' ', '', $em);
    $em = ucfirst(strtolower($em));

    $em2 = strip_tags($_POST['reg_email2']);
    $em2= str_replace(' ', '', $em2);
    $em2 = ucfirst(strtolower($em2));



    $password = strip_tags($_POST['reg_password']);
    $password2 = strip_tags($_POST['reg_password2']);

    $date = date("Y-m-d");

    if ($em == $em2) {
      if(filter_var($em, FILTER_VALIDATE_EMAIL)) {
          $em = filter_var($em, FILTER_VALIDATE_EMAIL);
      }

      else {
        echo "Invalid format";
      }
      
    }
    else {
      echo "Emails don't match";
    }
  }

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome to Swirlfeed!</title>
</head>
<body>
  <form action="register.php" method="POST">
    <input type="text" name="reg_fname" placeholder="First Name" required>
    <br />
    <input type="text" name="reg_lname" placeholder="Last Name" required>
    <br />
    <input type="email" name="reg_email" placeholder="Email" required>
    <br>
    <input type="email" name="reg_email2" placeholder="Confirm Email" required>
    <br>
    <input type="password" name="reg_password" placeholder="Password" required>
    <br>
    <input type="password" name="reg_password2" placeholder="Confirm Password" required>
    <br />
    <input type="submit" name="register_button" value="register"/>
  </form>
</body>
</html>
