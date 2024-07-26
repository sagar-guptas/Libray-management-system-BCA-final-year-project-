<?php include('connection.php');?>
<?php

$Roll= $_GET['roll'];
$query = "SELECT * FROM student where roll ='$Roll' ";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

$total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .conn{
            display: flex;
        }
        
        .form-container{
            display: flex;
            flex-direction: row;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
            background-color: white;
            width: 90%;
        }
        .form-section{
            display: flex;
           
            margin-right: 20px;
        }
        
        .form-section input{
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .form-sectio input{
            margin-bottom: 10px;
        }
        #ads{
            padding-top: 10px;
        }
        .form-sectio {
          padding-bottom: 20px;
            }
            #lll{
                padding: 10px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #007BFF;
            cursor: pointer;
            }
        
        #lll:hover{
            background-color: #0056b3;
        }
        .form-section label{display: inline-block;
        width: 150px;
        text-align: center;}
    </style>
</head>
<body>
   <?php include('nav.php');?>
   <div class="conn">
   <?php include('right.php');?>
   <div class="formcontainer">
            <h1>Student Updation Form</h1>
                <div class="form-container">
                    
                    <form action="" method="POST">
                        <div class="form-section">
                            <label for="name">Name:</label>
                            <input type="text" value="<?php echo$result['name'];?>" id="name" name="name">
                            <label for="username">Username:</label>
                            <input type="text" value="<?php echo$result['username'];?>"  id="username" name="username">
                        </div>
                        <div class="form-section">
                            <label for="password">Password:</label>
                            <input type="password" value="<?php echo$result['password'];?>" id="password" name="password">
                            <label for="re-password">Re-enter password:</label>
                            <input type="password" value="<?php echo$result['repassword'];?>" id="re-password" name="repassword">
                        </div>
                        <div class="form-section">
                            <label for="email">Email:</label>
                            <input type="text" value="<?php echo$result['email'];?>" id="email" name="email">
                            
                            <label for="phone">Phone No:</label>
                            <input type="text" value="<?php echo$result['phone'];?>" id="phone" name="phone">
                        </div>
                        <div class="form-section">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" value="<?php echo$result['dob'];?>" id="dob" name="dob" placeholder="Enter your DOB" required>

                        </div>
                        <div class="form-section">
                            <label for="dob">Roll no:</label>
                            <input type="text" value="<?php echo$result['roll'];?>" id="dob" name="roll" placeholder="Enter your DOB" required>

                        </div>
                       

                        </div> 
                        <div id="ads" class="form-sectio">
                        <h3>Gender</h3>
                        <input type="radio" name="gender" value="male" <?php if ($result['gender']=='male' ) { echo "checked"; } ?> id="male">
                        <label for="male">Male:</label>
                        <input type="radio" name="gender" value="female" <?php if ($result['gender']=='female' ) { echo "checked"; } ?> id="female">
                        <label for="female">Female:</label>
                        <input type="radio" name="gender" value="other" <?php if ($result['gender']=='other' ) { echo "checked"; } ?> id="other">
                        <label for="other">Other:</label>



                        </div>
                        <button id="lll" name="update" type="submit" >Update</button>
                       
                    </form>
                </div>
            </div>
   </div>
   <?php include('foot.php');?>
   <?php 
   
if (isset($_POST['update']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rePassword = $_POST['repassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];

    //  $querr = "UPDATE student set ('$name','$username','$password','$rePassword','$email','$phone','$dob','$roll','$gender')";
     $querr = "UPDATE student SET `name`='$name',`username`='$username',`password`='$password',`repassword`='$rePassword',`email`='$email',`phone`='$phone',`dob`='$dob',`roll`='$roll',`gender`='$gender'WHERE roll= $roll";
     $data =mysqli_query($conn,$querr);

     if($data){
        echo('record updated');}

        else{
            echo('error');}
}
   ?>
</body>
</html>