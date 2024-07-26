<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            display: flex;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
            /* justify-content: center;
            align-items: center; */
            /* height: 100vh; */
        }
        .left{
            display: flex;
            width: 60%;
        }
        .left img{
            display: flex;
            width: 520px;
            height: 600px;
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
            /* padding: 10px; */
            /* border-radius: 5px;
            border: 1px solid #ddd; */
        }
        .form-sectio {
          padding-bottom: 20px;
            }
        .form-container button{
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #007BFF;
            cursor: pointer;
        }
        .form-container button:hover{
            background-color: #0056b3;
        }
        .form-section label{display: inline-block;
        width: 150px;
        text-align: center;}
        
        .title{
    display: inline-block;
}


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('nav.php');?>
    <div class="container">
    <?php include('right.php');?>
        <div class="formcontainer">
            <h1 class="title" >Teacher Registration Form</h1>
            <a href="sign.php">New Student</a>
            <a href="teacher_sign.php">New Teacher</a>
                <div class="form-container">
                    
                    <form action="" method="post">
                        <div class="form-section">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username">
                        </div>
                        <div class="form-section">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password">
                            <label for="re-password">Re-enter password:</label>
                            <input type="password" id="re-password" name="re-password">
                        </div>
                        <div class="form-section">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email">
                            
                            <label for="phone">Phone No:</label>
                            <input type="text" id="phone" name="phone">
                        </div>
                        <div class="form-section">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" id="dob" name="dob" placeholder="Enter your DOB" required>

                        </div>
                        <div class="form-section">
                            <label for="dob">Enter teacher id:</label>
                            <input name="id" type="text"placeholder="Enter Teacher id">

                        </div>
                        <div class="form-sectio">
                        <h3>Gender</h3>
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male">Male:</label>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female">Female:</label>
                            <input type="radio" name="gender" value="other" id="other">
                            <label for="other">Other:</label>


                        </div>
                        <button name="submit" type="submit" >Submit</button>
                       
                    </form>
                </div>
            </div>
    </div>
    <?php include('foot.php');?>
</body>
</html>

<?php
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rePassword = $_POST['re-password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];

     $querr = "INSERT INTO teacher VALUES ('$name','$username','$password','$rePassword','$email','$phone','$dob','$id','$gender')";

     $data =mysqli_query($conn,$querr);

     if($data){
        echo('inserted');}

        else{
            echo('error');}
}

?>
