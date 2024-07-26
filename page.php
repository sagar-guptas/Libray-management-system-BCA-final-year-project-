<?php
include("connection.php") ;
$Roll= $_GET['user'];
//  echo $Roll;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-color: #f8f9fa;
            text-align: center;
        }
        .prooo{
            margin: 10px;
            width: 80%;
            display: flex;
            background-color: white;
            padding: 20px 0px;
            justify-content: space-between;
            align-items: center;
            padding: 10px 14px;
        }
        .par{
            width: 100px;
        }
        .dust{
            height: 30px;
        }
        .maain {
            display: flex;
            padding: 0px 100px;
            /* flex-wrap: wrap; */
            flex-direction: column;
            align-items: center;
            overflow-y: scroll;
             height: 500px;
            }
            .Checkout{
                border: 0px;
                background-color: orange;
                width: 40%;
                padding: 15px;
                margin: 15px;
            }
    </style>
</head>
<body>
<?php include("nav.php") ?>



<h1>My books</h1>
<?php

// Query to get all the books issued by the user
$query = "SELECT issued.bid, book.book_name, book.book_discription, book.price, book.Quantity, book.author_Name, book.product_image1 
          FROM issued 
          INNER JOIN book ON issued.bid = book.bid 
          WHERE issued.roll = '$Roll'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='prooo'>";
        echo "<img class='par' src='" . $row['product_image1'] . "' alt='' srcset=''>";
        echo "<h3>" . $row['book_name'] . "</h3>";
        echo "<h3>$" . $row['price'] . "</h3>"; // Display the actual price
        echo "<p>" . $row['book_discription'] . "</p>"; // Display the book description
        
        echo "</div>";
    }
} else {
    echo "No books issued by this user.";
}
?>

</body>
</html>