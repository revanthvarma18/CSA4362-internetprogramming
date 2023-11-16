<!DOCTYPE html>
<html lang="en">
<head>
    <title>forms get</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph_no = $_POST['ph_no'];
    $depart_loc = $_POST['depart_loc'];
    $desti_loc = $_POST['desti_loc'];
    $DOJ = $_POST['DOJ'];
    $payment= $_POST['payment'];
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "train";

  $con = mysqli_connect($servername, $username, $password, $database);

  $sql = "INSERT INTO `login` (`name`, `email`, `ph_no`, `depart_loc`, `desti_loc`, `DOJ`, `payment`) VALUES ('name', 'email', '63029297', 'depart_loc', 'desti_loc', '22-11-2003', 'online/offline');";

  $result = mysqli_query($con, $sql);

  if ($result)
 {
    echo "Data inserted successfully";

  } 
else
 {
    echo "Data not inserted successfully";
  }
}
?>
<form action="/train/detail.php" method="post">

  Name:<br>
  <input type="text" id="name" name="name" ><br><br>
	
  email:<br>
  <input type="text" id="email" name="email" ><br><br>

  phone number:<br>
  <input type="text" id="ph_no" name="ph_no" ><br><br>

  Departure location:<br>
  <input type="text" id="depart_loc" name="depart_loc" ><br><br>

  Destination location:<br>
  <input type="text" id="desti_loc" name="desti_loc" ><br><br>

  DOJ:<br>
  <input type="text" id="DOJ" name="DOJ" ><br><br>

  payment:<br>
  <input type="text" id="payment" name="payment" ><br><br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>