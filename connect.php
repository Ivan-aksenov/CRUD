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
