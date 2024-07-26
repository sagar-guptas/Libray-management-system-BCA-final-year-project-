<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            
        }
        .notice{
            text-align: center;
            align-items: center;
        }
        .ggg{
            padding: 8px;
        }
        button{
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #007BFF;
            cursor: pointer;

        }
        button:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
    include('nav.php');?>
     <div class="container">
    <?php include('right.php');?>
    <div class="notice">
        <h2>Notice</h2>
        <form action=""method="POST"  enctype="multipart/form-data">
            <textarea class="ggg" cols="80" rows="10" name="Message" id=""></textarea><br>
            <input class="ggg" type="file" name="file" id=""><br>
            <button class="ggg" name="submit" type="submit" >Click Me!</button>
        </form>
    </div>

     </div>
     <?php include("foot.php"); ?>
    
</body>
</html>

<?php
if (isset($_POST['submit']))
{
    $message = $_POST['Message'];
    // $file = $_POST['file'];
    $file_name1 = $_FILES["file"]["name"];
    $temp_name1 = $_FILES["file"]["tmp_name"];
    $folder1 = "files/".$file_name1;
    move_uploaded_file($temp_name1, $folder1);
   

     $querr = "INSERT INTO notice VALUES ('$message','$folder1')";

     $data =mysqli_query($conn,$querr);

     if($data){
        echo('inserted');}

        else{
            echo('error');}
}

?>
