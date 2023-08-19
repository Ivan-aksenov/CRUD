<input type="number" name="employeID" placeholder="Id" value="<?php echo $employeID[0];?>"require><br><br>
        <input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname[1];?>" require><br><br>
        <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname[2];?>" require><br><br>
        <input type="number" name="age" placeholder="Age" value="<?php echo $age[3];?>" require><br><br>
        <input type="number" name="address" placeholder="address" value="<?php echo $address[4];?>"require><br><br>
        <input type="number" name="email" placeholder="email" value="<?php echo $email[5];?>" require><br><br>
        <input type="date" name="date" placeholder="date" value="<?php echo $date[6];?>" require><br><br>
        <input type="Text" name="mobile" placeholder="mobile" value="<?php echo $mobile[7];?>"require><br><br>
        <input type="text" name="Cause" placeholder="Cause" value="<?php echo $Cause[8];?>" require><br><br>
        <div>
            <input type="submit" name="insert" value="Add">

            <input type="submit" name="update" value="Update">

            <input type="submit" name="delete" value="Delete">

            <input type="submit" name="search" value="Find">