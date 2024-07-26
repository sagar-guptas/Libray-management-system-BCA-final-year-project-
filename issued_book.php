<?php
include('connection.php');

$query = "SELECT issued.roll, issued.bid, issued.status, student.name AS student_name, book.book_name, book.author_name, book.product_image1, book.Quantity 
          FROM issued 
          INNER JOIN student ON issued.roll = student.roll 
          INNER JOIN book ON issued.bid = book.bid";
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
}

tr{
   padding: 10px;
}
td{
    padding: 20px;
}
.tab{
    /* position: relative; */
    overflow-y:auto; 
    height: 400px;
}

.btn{
    padding: 10px;
    background-color: greenyellow;
    border: 0px;
}
th {
    background-color: rgb(157 209 255);
    padding: 5px 0;
    position: sticky;
    top: 0;
}

    </style>
</head>
<body>
<?php include('nav.php');?>
            <div class="container">
                <?php include('right.php');?>
                <div class="right">
                <div style="display: flex; align-items: center;">
                <h1 style="margin-right: 20px;">Book issued</h1>
                <a href="issued_book.php" style="margin-right: 20px;">Students Issued Book</a>
                <a href="Teacher_issued.php">Teachers Book Issued</a>
            </div>

            
            <div class="tab">
                <?php
                $data = mysqli_query($conn, $query);

                if (!$data) {
                    echo "Error: Unable to execute the SQL query. " . mysqli_error($conn);
                    exit();
                }
            echo "<table>";
echo "
<tr>
<th>Student Name</th>
<th>Roll </th>
<th>Book Name</th>
<th>Book Id</th>
<th>Author</th>
<th>Image</th>

<th>Status</th>
<th>Full Details</th>
<th>Reject</th>
</tr>";

while($row = mysqli_fetch_assoc($data)) {
    if ($row['status'] == -1) {
        $statusText = 'Pending';
        $statusColor = 'orange';
    } else if ($row['status'] == 1) {
        $statusText = 'Issued';
        $statusColor = 'green';
    } else {
        $statusText = 'Returned';
        $statusColor = 'red';
    }

    echo "<tr>";
    echo "<td>" . $row['student_name'] . "</td>";
    echo "<td>" . $row['roll'] . "</td>";
    echo "<td>" . $row['book_name'] . "</td>";
    echo "<td>" . $row['bid'] . "</td>";
    echo "<td>" . $row['author_name'] . "</td>";
    echo "<td><img src='". $row['product_image1'] . "'height='50px'></td>";
    // echo "<td>" . $row['Quantity'] . "</td>";
     echo "<td style='color: {$statusColor};'>" . $statusText . "</td>";
    echo "<td><a class='btn' href='.php?roll=$row[roll]&name=$row[bid]' type='submit'>EDIT</a></td>";
    echo "<td><form method='post'>
    
    <button class='btn' name='return' value='{$row['roll']}' type='submit'>Return</button></form></td>";
echo "</tr>";
}

echo "</table>";
?>
           
        </div>
    </div>
    </div>
    <?php include('foot.php');?>
    
  
?>
<?php
if (isset($_POST['return'])) {
    $roll = $_POST['return'];
    
    // Check if the book is already returned
    $status_query = "SELECT status, bid FROM issued WHERE roll = $roll";
    $status_result = mysqli_query($conn, $status_query);
    $status_row = mysqli_fetch_assoc($status_result);
    $status = $status_row['status'];
    $bid = $status_row['bid'];

    if ($status != 0) {
        // If the book is not already returned, update the status and increase the quantity
        $query = "UPDATE issued SET status = 0 WHERE roll = $roll";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $quantity_query = "UPDATE book SET Quantity = Quantity + 1 WHERE bid = $bid";
            $quantity_result = mysqli_query($conn, $quantity_query);

            if ($quantity_result) {
                echo "Status updated and quantity increased successfully.";
            } else {
                echo "Error updating quantity: " . mysqli_error($conn);
            }
        } else {
            echo "Error updating status: " . mysqli_error($conn);
        }
    } else {
        echo "The book is already returned.";
    }
}
?>

</body>
</html>