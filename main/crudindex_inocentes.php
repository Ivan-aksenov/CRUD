<!DOCTYPE Html>
<html>
<head>
    <title>Incident Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4163e4758e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<style>
body {font-family: 'Oswald';}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  font-family: 'Oswald';
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  font-family: 'Oswald';
  background-color: #0048ba;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  font-family: 'Oswald';
  background-color: #45a049;
}

.container {
  font-family: 'Oswald';
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<h1> Incident Report </h1>
    <body>
    <div class="container">
    <form  action="dis.php" method="post">
    
    <label for="employeID"><b>EmployeeID</b></label>
    <i class="fa fa-user icon"></i>
    <input type="text" placeholder="Enter employeID " name="employeID" id="employeID" maxlength="11" autocomplete="off" >

    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" maxlength="100" autocomplete="off" >

    <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" maxlength="100" autocomplete="off" >

    <label for="Age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" id="age" autocomplete="off" >

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" maxlength="100" autocomplete="off" >
    <hr>
    <label for="email"><b>email</b></label>
    <input type="email" placeholder="ex:@juan karlos" name="email" id="email"autocomplete="off" >
    <hr>
    <label for="mobile"><b>mobile</b></label>
    <input type="text" placeholder="63+" name="mobile" id="mobile" maxlength="11" autocomplete="off" >
    <hr>
    <label for="date"><b>date of incident</b></label>
    <input type="date" name="date" id="date" >
    <hr>
    <label for="Cause"><b>Cause of incident</b></label>
    <input type="text" name="Cause" id="Cause" >
    <hr>
            <input type="submit" name="insert" value="insert">

            <input type="submit" name="update" value="Update">

            <input type="submit" name="delete" value="Delete">
               
    </div>
    </body>
    <body>
      <h1> FIND YOUR ID </h1>
      <h2> enter your employeID </h2>

      <div class="container">
            <form action="" method="POST">
                <input type="text" name="id" placeholder="Enter User ID">
                <input type="submit" name="search" value="Search User ID">
            </form>
            <table>
                    <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'infoSys');

                    if (isset($_POST['search']))
                    {
                        $id = $_POST['id'];

                        $query = "SELECT * FROM `client` WHERE CONCAT(`employeID`,`firstname`,`lastname`,`age`,`address`,`email`,`date`,`mobile`,`Cause`) LIKE '%".$id."%' ";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['employeID']; ?> </td>
                                <td><?php echo $row['firstname']; ?> </td>
                                <td><?php echo $row['lastname']; ?> </td>
                                <td><?php echo $row['age']; ?> </td>
                                <td><?php echo $row['address']; ?> </td>
                                <td><?php echo $row['email']; ?> </td>
                                <td><?php echo $row['date']; ?> </td>
                                <td><?php echo $row['mobile']; ?> </td>
                                <td><?php echo $row['Cause']; ?> </td>

                            </tr>
                            <?php
                        }
                    }
                    
                    /*if(isset($_POST['search']))
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
         }*/
                    ?>
    </body>
</body>
</html>