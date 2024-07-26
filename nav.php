<?php
//  $admin="sagar";
// session_start();
// $username = $_SESSION['username'];
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav{
    background-color: rgb(251, 251, 251);
    /* padding-top: 9px;
    padding-bottom: 9px; */
}
ul{
    color: rgb(6, 133, 244);
    align-items: center;
    display: flex;
    justify-content: space-between;
    padding-left: 5px;
    padding: 2px 0px 2px 50px;
    
}
li{
    list-style: none;
    padding: 0px 15px 0px 15px;
}
.mf{
  /* height: 25px; */
  width: 200px;
}
    </style>
</head>
<body>
<nav>
        <ul>
            <li> <a href="index.php">
                <img  class="mf" src="utility/icon/bo.png" alt="" srcset="">

            </a>
            </li>
            <li>
                <!-- <h3>Welcome 
                    <?php echo $username;  ?>
                </h3> -->
                <a href="index.php">Log Out</a>
            </li>
        </ul>
    </nav>
</body>
</html>
