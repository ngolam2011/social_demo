<!DOCTYPE html>
<?php
  $con = mysqli_connect("localhost", "root", "", "social");
  if(mysqli_connect_errno())
  {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  $query = mysqli_query($con,"INSERT INTO test VALUES ('1', 'Reece')")
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swirlfeed</title>
</head>
<body>
  Hello Reece!
</body>
</html>
