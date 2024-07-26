<?php include("connection.php"); 

$Bid= $_GET['Bid'];
$query = "SELECT * FROM book where Bid ='$Bid' ";
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
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="container">
    <?php include('right.php');?>
    <div class="form-container">
            <h1>Update Book </h1>
            <form action="" method="post" enctype="multipart/form-data">
    <label for="username">Book name:</label>
    <input type="text" value="<?php echo $result['book_name'];?>" id="productname" name="productname">
    <label for="discription">Book description:</label>
    <input type="text" value="<?php echo $result['book_discription'];?>" id="discription" name="discription"><br>
    <label for="price">Book Price:</label>
    <input type="text" value="<?php echo $result['price'];?>" id="price" name="price">
    <label for="text">Author:</label>
    <input type="text" value="<?php echo $result['author_Name'];?>" id="Author" name="Author"><br>
    <label for="text">Quantity:</label>
    <input type="text" value="<?php echo $result['Quantity'];?>" id="Quantity" name="Quantity">
    <label for="text">Bid:</label>
    <input type="text" value="<?php echo $result['Bid'];?>" id="Bid" name="Bid"><br>
    <label for="productImage1">Re-Upload Image 1</label><br>
    <input type="file" name="productImage1" id="productImage1" accept="image/*"><br>
    <button name="submit" type="submit">Click Me!</button>
</form>

        </div>
    </div>
    <?php include('foot.php');

if (isset($_POST['submit']))
{
    $productname = $_POST['productname'];
    $discription = $_POST['discription'];
    $price = $_POST['price'];
    $Author = $_POST['Author'];
    $Quantity = $_POST['Quantity'];
    $Bid = $_POST['Bid'];

    $query = "UPDATE book SET `book_name`='$productname',`book_discription`='$discription',`price`='$price',`author_Name`='$Author',`Quantity`='$Quantity',`Bid`='$Bid' WHERE Bid= $Bid";
    $data = mysqli_query($conn, $query);

    if($data){
        echo('Record updated');
    } else {
        echo('Error: ' . mysqli_error($conn));
    }
}
?>

</body>
</html>