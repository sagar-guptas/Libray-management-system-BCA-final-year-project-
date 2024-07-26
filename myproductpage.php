<?php 
include('connection.php');
$Roll= $_GET['roll'];
// echo $Roll;
if(isset($_GET['Bid'])){
    $BID= $_GET['Bid'];
    $query = "SELECT * FROM book where Bid ='$BID' ";
    $data = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($data);
    $img=$result['product_image1'];

    $total = mysqli_num_rows($data);
    // rest of your code
} else {
    echo "No book id provided";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .contaier{
            margin: 20px 200px;
            display: flex;
        }
        .left-box{
            width: 50%;
            border: 1px solid blue;
            border-radius: 10px;
        }
        .mainbox{
            padding: 30px 0px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .mainimage{
            height: 390px;
            /* width: auto; */
        }
        .small-img{
            display: flex;
            justify-content: space-between;
            padding: 8px;
            align-items: center;
        }
        .image-box{
            margin: 0px 8px 8px 0px;
            height: 100px;
            width: 100px;
            cursor: pointer;
            border: 1px solid skyblue;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image{
            height: 90%;
            width: auto;
        }
        .detail{
            margin-left: 50px;
            width: 50%;
        }
        .detail h2{
            color: blue;
        }
        .inputs{
            width: 100%;
            justify-content: space-between;
        }
        td input{
            height: 30px;
        }
        button{
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            background-color: blue;
            color: white;
            margin-top: 14px;
            cursor: pointer;
        }
        button:hover{
            background-color: skyblue;
        }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('nav.php')?>
    <div class="contaier">
        <div class="left-box">
            <div class="mainbox">
            <img class='saf' class="mainimage" id="mainimage" src="<?php echo $img; ?>" width="350px">  
            </div>
          
        </div>
        <div class="detail">
            <h1><?php echo$result['book_name'];?></h1>
            <p><?php echo$result['book_discription'];?>(In  Stock)</p>
            <h2>Price : <?php echo$result['price'];?></h2>
            <table cellspacing="0" class="inputs">
                <tr>
                    <td>Quantity</td>
                    <td align="right"><input type="number" name="" value="1" readonly id="first"></td>
                </tr>
                <tr>
                    <td>Penaltity Charges Per Day</td>
                    <td align="right"><input type="number" name="" value="20" readonly id="second"></td>
                </tr>
                <tr>
                    <td>Penaltity Charges Per Week</td>
                    <td align="right"><input type="number" name="" value="250" readonly id="third"></td>
                </tr>
                
            </table>
            <h4>Details</h4>
            <p><?php echo$result['book_discription'];?>.</p>
            <form action= "" method="post">
                <input type="hidden" name="roll" value="<?php echo $Roll; ?>">
                <input type="hidden" name="bid" value="<?php echo $BID; ?>">
                <input type="hidden" name="status" value="<?php echo $status; ?>">
                <button type="submit" onclick="return confirmAction()">Take Now</button>

            </form>

                 <button>Add to Wishlist</button>
        </div>
    </div>
    <?php
include('connection.php');



include('foot.php');
?>

</body>
<script>
function confirmAction() {
    var confirmation = confirm("This feature will be available in the future.");
    if (confirmation) {
        // If the user clicked "OK", submit the form
        return true;
    } else {
        // If the user clicked "Cancel", don't submit the form
        return false;
    }
}
</script>

</html>