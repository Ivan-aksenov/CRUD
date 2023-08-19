

<?php
//include 'display.php';
    /*$host = "localhost";
    $user = "root";
    $password ="";
    $database = "databases";
    */
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    

// connect to mysql database

    try{
        $connect = mysqli_connect("localhost", "root", "", 'infoSys');

    } catch (mysqli_sql_exception $ex) {
        echo 'Error';
    }
    // get values from the form
   //function getPosts()
   // {
    $employeID = $_POST['employeID'];// $Variable
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $mobile = $_POST['mobile'];
    $Cause= $_POST['Cause'];

         /*$posts = array();
        $posts[0] = $_POST['employeID']; //image.png
        $posts[1] = $_POST['firstname'];
        $posts[2] = $_POST['lastname'];
        $posts[3] = $_POST['age'];
        $posts[4] = $_POST['address'];
        $posts[5] = $_POST['email'];
        $posts[6] = $_POST['date'];
        $posts[7] = $_POST['mobile'];
        $posts[8] = $_POST['Cause'];
        return $posts; */

    //search
    
    if(isset($_POST['search']))
    {
        //$client = getPosts();
        
        $search_Query = "SELECT * FROM client WHERE `employeID`='$employeID'";
        
        $search_Result = mysqli_query($connect, $search_Query);
        
        if($search_Result)
        {
            if(mysqli_num_rows($search_Result))
            {
                while($row = mysqli_fetch_assoc($search_Result))
                {
                 header('location:display.php');
                 /*$employeID=$row['employeID'];
                 $firstname=$row['firstname'];
                 $lastname=$row['lastname'];
                 $age=$row['age'];
                 $address=$row['address'];
                 $email=$row['email'];
                 $date=$row['date'];
                 $mobile=$row['mobile'];
                 $Cause=$row['Cause'];*/
              /*      
              $employeID=$row['employeID'];
              $firstname=$row['firstname'];
              $lastname=$row['lastname'];
              $age=$row['age'];
              $address=$row['address'];
              $email=$row['email'];
              $date=$row['date'];
              $mobile=$row['mobile'];
              $Cause=$row['Cause'];

              echo '<table style="width:100%">
              <tr>
              <th>employeID</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Age</th>
              <th>Address</th>
              <th>Email</th>
              <th>Date</th>
              <th>Mobile</th>
              <th>Cause</th>
              </tr>
              <tr>
                <th scope="row">'.$employeID.'<th>
                <th>'.$firstname.'</th>
                <th>'.$lastname.'</th>
                <th>'.$age.'</th>
                <th>'.$address.'</th>
                <th>'.$email.'</th>
                <th>'.$date.'</th>
                <th>'.$mobile.'</th>
                <th>'.$Cause.'</th>
                </tr>
            </table>';
            */
                    
                    
                }
            }else{
                echo 'No Data For This Id';
            }
        }else{
            echo 'Result Error';
        }
    }


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

    // Edit
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

