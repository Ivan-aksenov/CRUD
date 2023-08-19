
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>DISPLAY</title>
</head>
<body>
  <h1>TABLE INFOMATION</h1>
    <table class="table">
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
          /*
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
        } 
        */
          ?>
    </table>      
    
</body>
</html>