<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .container {
            /* display: flex; */
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input[type="text"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: #fff;
            background-color: #007BFF;
        }
    </style>
</head>
<body>
    <?php include('nav.php');?>
    <div class="container">
        <form action="" method="post">
            <h1>Update your data</h1>
            <label for="Username">Name</label>
            <input type="text" name="name" id=""><br>
            <label for="Username">Username</label>
            <input type="text" name="username" id=""><br>
            <label for="Username">Password</label>
            <input type="text" name="Password" id=""><br>
            <label for="Username">Email</label>
            <input type="text" name="email" id=""><br>
            <label for="Username">Phone Number</label>
            <input type="text" name="Phone" id=""><br>
            <label for="Username">DOB</label>
            <input type="text" name="DOB" id=""><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
