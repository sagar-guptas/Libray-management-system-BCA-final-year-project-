<?php include("connection.php"); 
session_start();
$_SESSION['username'] = $username; 
?>

<?php

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pas = $_POST['password'];

    $query = "SELECT * FROM student WHERE username='$username' AND password ='$pas' ";
    $result = mysqli_query($conn, $query);

    $data = mysqli_query($conn ,$query);
    $total =  mysqli_num_rows($data);

    // echo($total);
    if($total == 1){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    }else{
        echo "Invalid username or password";
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            display: flex;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
            /* align-items: center;
            justify-content: center; */
        }
        .left{
            display: flex;
            width: 60%;
        }
        .left img{
            display: flex;
            width: 700px;
        }
        
        .form-container{
            display: flex;
            flex-direction: column;
            padding: 150px;
            border-radius: 10px;
           
            background-color: white;
        }
        .form-container input{
            margin-bottom: 20px;
            padding: 10px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ddd;
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
        .flute{
            text-align: center;
            display: block;
            background-color: beige;
            border-radius: 5px ;
            padding-bottom: 5px;
            text-decoration: none;
            
        }
        #lk{
            margin-top: 20px;
            text-decoration: none;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('nav.php');?>
    <div class="container">
        <div class="left">
            <img src="utility/will.jpg" alt="" srcset="">
        </div>
        <div class="form-container">
            <h1> Student Login</h1>
            <form action="" method="POST">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br>
                <button type="submit" name="submit" onclick="window.location.href=''">Click Me!</button>
                <br>
                
                <a class="flute"id="lk"  href="teacher.php">Teacher Login.</a><br>
                <a class="flute" href="admin_login.php">Admin Login.</a><br>
                <a class="flute" href="index.php">Student Login.</a>
            </form>
        </div>
    </div>
    
</body>
</html>