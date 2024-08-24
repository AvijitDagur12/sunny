<?php
include("connection.php");

echo $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php curd operation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <div class="title">
            Update Student form
        </div>
        <div class="form">
            <div class="input-field">
                <label>First Name</label>
                <input type="text"  class="input" name="fname" required>
                
            </div>
            <div class="input-field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
                
            </div>
            <div class="input-field">
                <label>Password</label>
                <input type="password" class="input" name="password" required>
                
            </div>
            <div class="input-field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="conpassword" required>
                
            </div>
            <div class="input-field">
                <label>Gender</label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value="not selected">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>  
                </div>              
            </div>
            <div class="input-field">
                <label>Email address</label>
                <input type="email" class="input" name="email" required>
                
            </div>
            <div class="input-field">
                <label>Phone Number</label>
                <input type="text" class="input" name="phone" required>
                
            </div>
            <div class="input-field">
                <label>Address</label>
                <textarea class="textarea" name="address"></textarea>
                
            </div>
            <div class="input-field terms">
                <label class="check"></label>
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <p>Agree To terms and condition</p>
            </div>
            <div class="input-field">
                <input type="submit" value="Update Details" class="btn" name="register">
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>


<?php
// if($_POST['register'])
if(isset($_POST['register']))
{
   
        $First_name=$_POST['fname'];
        $Last_name=$_POST['lname'];
        $Password=$_POST['password'];
        $Con_Password=$_POST['conpassword'];
        $Gender=$_POST['gender'];
        $Email=$_POST['email'];
        $Phone=$_POST['phone'];
        $Address=$_POST['address'];

        // if($First_name!="" && $Last_name!="" && $Password!="" && $Con_Password!="" &&
        //     $Gender!="" && $Email!="" && $Phone!="" && $Address!="")
        //     {
                $query="INSERT INTO wipro (First_Name,Last_Name,Password,Con_Password,Gender,Email,Phone,Address) VALUES('$First_name','$Last_name', 
                '$Password','$Con_Password','$Gender','$Email','$Phone','$Address')";

                        $data=mysqli_query($connection,$query);
                if($data){
                echo "Data inserted into data base";
                         }
                else{
                 echo "Failed inserting";
                    }
            }

           
            echo $_GET['ID'];
            echo $_GET['fn'];
            echo $_GET['ln'];
            echo $_GET['ge'];
            echo $_GET['Em'];
            echo $_GET['Ph'];
            echo $_GET['Ad'];

?>