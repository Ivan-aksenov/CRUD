<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>DISPLAY</title>
    <style>
        body{
            background-image: linear-gradient(#EE9CA7,#FFDDE1);
            background-attachment:fixed;
        }
        h1{
            color: white;
            text-align: center;

        }
    </style>
</head>
<body>
<h1>TABLE INFOMATION</h1>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">employeID</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col">Mobile</th>
            <th scope="col">Cause</th>
          </tr>
        </thead>
    
        <tbody>

          <?php
          $employeID = $_POST['employeID'];// $Variable
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $age = $_POST['age'];
          $address = $_POST['address'];
          $email = $_POST['email'];
          $date = $_POST['date'];
          $mobile = $_POST['mobile'];
          $Cause= $_POST['Cause'];
        try{
            $connect = mysqli_connect("localhost", "root", "", 'infoSys');
    
        } catch (mysqli_sql_exception $ex) {
            echo 'Error';
        }
           
          if(isset($_POST['search']))
           {
               //$client = getPosts();
               $search_Query = "SELECT * FROM client WHERE `firstname`='$firstname'";
               
               $search_Result = mysqli_query($connect, $search_Query);
               
               if($search_Result)
               {
                   if(mysqli_num_rows($search_Result))
                   {
                       while($row = mysqli_fetch_assoc($search_Result))
                       {
                 $employeID=$row['employeID'];
                 $firstname=$row['firstname'];
                 $lastname=$row['lastname'];
                 $age=$row['age'];
                 $address=$row['address'];
                 $email=$row['email'];
                 $date=$row['date'];
                 $mobile=$row['mobile'];
                 $Cause=$row['Cause'];
                 echo '<tr>
                <td>'.$employeID.'</td>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>'.$age.'</td>
                <td>'.$address.'</td>
                <td>'.$email.'</td>
                <td>'.$date.'</td>
                <td>'.$mobile.'</td>
                <td>'.$Cause.'</td>
                </tr>';
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}
    //insert
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


   
                
              

          /*$con = mysqli_connect("localhost", "root", "", 'infoSys');

          $sql="SELECT * FROM `client`";
          $result=mysqli_query($con,$sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $employeID=$row['employeID'];
              $firstname=$row['firstname'];
              $lastname=$row['lastname'];
              $age=$row['age'];
              $address=$row['address'];
              $email=$row['email'];
              $date=$row['date'];
              $mobile=$row['mobile'];
              $Cause=$row['Cause'];
              echo '<tr>
              <td>'.$employeID.'</td>
              <td>'.$firstname.'</td>
              <td>'.$lastname.'</td>
              <td>'.$age.'</td>
              <td>'.$address.'</td>
              <td>'.$email.'</td>
              <td>'.$date.'</td>
              <td>'.$mobile.'</td>
              <td>'.$Cause.'</td>
              </tr>';

              
            }
          }*/
        
          ?>


    </table>
    
</body>
</html>