<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database

    try{
        $connect = mysqli_connect("localhost", "root", "", 'infoSys');

    } catch (mysqli_sql_exception $ex) {
        echo 'Error';
    }
    // get values from the form
    //function getPosts()
    
    $employeID = $_POST['employeID'];// $Variable
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $mobile = $_POST['mobile'];
    $Cause= $_POST['Cause'];
    
    // Insert
    if(isset($_POST['insert']))
    {
        
       // $client = getPosts();
        $insert_Query = "INSERT INTO `client`(`employeID`,`firstname`, `lastname`, `age`,`address`,`email`,`date`,`mobile`,`Cause`) 
        VALUES ('$employeID', '$firstname', '$lastname','$age', '$address' , '$email' , '$date' ,'$mobile','$Cause')";
        try{
            $insert_Result = mysqli_query($connect, $insert_Query);
            
            if($insert_Result)
            {
                if(mysqli_affected_rows($connect) > 0)
                {
                    echo 'Data Inserted';
                }else{
                    echo 'Data Not Inserted';
                }
            }
        } catch (Exception $ex) {
            echo 'Error Insert '.$ex->getMessage();
        }
    }

    // Delete
    if(isset($_POST['delete']))
    {
        //$client = getPosts();
        $delete_Query = "DELETE FROM client WHERE `employeID` = '$employeID'";
        try{
            $delete_Result = mysqli_query($connect, $delete_Query);
            
            if($delete_Result)
            {
                if(mysqli_affected_rows($connect) > 0)
                {
                    echo 'Data Deleted';
                }else{
                    echo 'Data Not Deleted';
                }
            }
        } catch (Exception $ex) {
            echo 'Error Delete '.$ex->getMessage();
        }
    }


    // update
    if(isset($_POST['update']))
    {
       // $client = getPosts();
        $update_Query = "UPDATE `client` SET `firstname`='$firstname',`lastname`='$lastname',`address`='$address',`email`='$email',`date`='$date',`mobile`='$mobile',`Cause`='$Cause' WHERE `employeID` = '$employeID'";
        try{
            $update_Result = mysqli_query($connect, $update_Query);
            
            if($update_Result)
            {
                if(mysqli_affected_rows($connect) > 0)
                {
                    echo 'Data Updated';
                }else{
                    echo 'Data Not Updated';
                }
            }
        } catch (Exception $ex) {
            echo 'Error Update '.$ex->getMessage();
        }
    }

?>
