<?php 
$link = mysqli_connect("localhost", "root", "", "infoSys");// (server,username,password,database name)

//check connection
if($link === false){
    die("ERROR: Could not connect." .mysqli_connect_error());
}
// insert
$employeID = $_POST['employeID'];// $Variable
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];
$email = $_POST['email'];
$date = $_POST['date'];
$mobile = $_POST['mobile'];
$Cause= $_POST['Cause'];


$sql = "INSERT INTO client (employeID, firstname, lastname, age, address,email,date,mobile,Cause) #insert to column name(u need to pass column name)
        VALUES ('$employeID', '$firstname', '$lastname','$age', '$address' , '$email' , '$date' ,'$mobile','$Cause')"; #values for variables.
$result = $link->query($sql,);
    echo "1 record added";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/4163e4758e.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title>CRUD</title>
</head>
<body>

<form action=connect.php  method="POST">
  <div class="container">
    <h1>INCIDENT REPORT</h1>
    <p>Fill this up to record your report.</p>
    <hr>

    <label for="employeID"><b>EmployeeID</b></label>
    <i class="fa fa-user icon"></i>
    <input type="text" placeholder="Enter employeID " name="employeID" id="employeID" autocomplete="off" required>

    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" autocomplete="off" required>

    <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" autocomplete="off" required>

    <label for="Age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age" autocomplete="off" required>

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" autocomplete="off" required>
    <hr>
    <label for="email"><b>email</b></label>
    <input type="email" placeholder="ex:@juan karlos" name="email" id="email"autocomplete="off" required>
    <hr>
    <label for="mobile"><b>mobile</b></label>
    <input type="text" placeholder="63+" name="mobile" id="mobile" autocomplete="off" required>
    <hr>
    <label for="date"><b>date of incident</b></label>
    <input type="date" name="date" id="date" required>
    <hr>
    <label for="Cause"><b>Cause of incident</b></label>
    <input type="text" name="Cause" id="Cause" required>
    <hr>

    <button type="submit" class="submitbtn">Submit</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="crud_part1_verify.html">Verify</a>.</p>
  </div>

  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</form>


</body>
</html>