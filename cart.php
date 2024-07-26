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
  

<h1>My books</h1>
<?php
include('connection.php');

// Assume $username is the username of the user
$username = 'example_username';

// First, get the roll number associated with the username
$query = "SELECT roll FROM student WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $roll = $row['roll'];

    // Now, get all the books issued by the user
    $query = "SELECT issued.bid, book.book_name, book.author_name 
              FROM issued 
              INNER JOIN book ON issued.bid = book.bid 
              WHERE issued.roll = '$roll'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Book ID: " . $row['bid'] . ", Book Name: " . $row['book_name'] . ", Author Name: " . $row['author_name'] . "<br>";
        }
    } else {
        echo "No books issued by this user.";
    }
} else {
    echo "Username not found.";
}
?>

    
</body>
</html>