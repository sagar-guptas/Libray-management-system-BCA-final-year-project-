<?php include("connection.php"); ?>
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
            /* padding: 150px; */
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
   


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('nav.php');?>
    <div class="container">
    <?php include('right.php');?>
        <div class="form-container">
            <h1>Add a product </h1>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="username">Book name:</label>
                <input type="text" id="productname" name="productname">
                <label for="discription">Book description:</label>
                <input type="discription" id="discription" name="discription"><br>
                <label for="price">Book Price:</label>
                <input type="text" id="price" name="price">
                <label for="text">Author:</label>
                <input type="text" id="Author" name="Author"><br>
                <label for="text">Quantity:</label>
                <input type="text" id="Quantity" name="Quantity">
                <label for="text">Bid:</label>
                <input type="text" id="Bid" name="Bid"><br>
                <label for="productImage1">Upload Image 1</label><br>
                <input type="file" name="productImage1" id="productImage1" accept="image/*"><br>
            
                <button name="submit" type="submit">Click Me!</button>
                
            </form>
        </div>
    </div>
    <?php include('foot.php');?>
    
</body>
</html>

<?php



if (isset($_POST['submit']))
{


    

    $book_name = $_POST['productname'];
    $book_discription = $_POST['discription'];
    $price = $_POST['price'];
    $Author_name = $_POST['Author'];
    $Quantity = $_POST['Quantity'];
    $Bid = $_POST['Bid'];

    $file_name1 = $_FILES["productImage1"]["name"];
    $temp_name1 = $_FILES["productImage1"]["tmp_name"];
    $folder1 = "images/".$file_name1;
    move_uploaded_file($temp_name1, $folder1);

   

     $querr = "INSERT INTO book VALUES ('$book_name','$book_discription','$price','$Author_name','$Quantity','$Bid','$folder1')";

     $data =mysqli_query($conn,$querr);

     if($data){
        echo('inserted');}

        else{
            echo('error');}
}

?>
