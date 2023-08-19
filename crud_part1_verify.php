<?php
    $link = mysqli_connect("localhost", "root", "", "infoSys");

    //check connection
    if($link === false){
        die("ERROR: Could not connect." .mysqli_connect_error());
    }
    
    $emloyeID= $_POST['employeID'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "SELECT *FROM client WHERE firstname = '$firstname' AND lastname = '$lastname' AND employeID = '$emloyeID'";
    $result = $link->query($sql);
    if (!$row = $result-> fetch_assoc()){
        echo"Your account is not accepted!";
    }else{
        echo "Your account is correct";
    }
?>