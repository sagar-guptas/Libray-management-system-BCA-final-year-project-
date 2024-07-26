<?php include('connection.php');?>
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


/* container */

.container{
    display: flex;
}
.formm h1{
    text-align: center;
}
label{
    padding: 10px;
}
input{
    padding: 5px;
}
.form-container{
            display: flex;
            flex-direction: row;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
            background-color: white;
            width: 90%;
        }
        .form-section{
            display: flex;
           
            margin-right: 20px;
        }
        
        .form-section input{
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .form-sectio input{
            margin-bottom: 10px;
            /* padding: 10px; */
            /* border-radius: 5px;
            border: 1px solid #ddd; */
        }
        .form-sectio {
          padding-bottom: 20px;
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
        .form-section label{display: inline-block;
        width: 150px;
        text-align: center;}

</style>
</head>
<body>
<?php include('nav.php'); ?>
    <div class="container">
    <?php include('right.php');?>
    
    <div class="formcontainer">
            <h1>Issue A Book </h1>
                <div class="form-container">
                    
                    <form action="" method="post">
                        <div class="form-section">
                            <label for="name">Student Name:</label>
                            <input type="text" id="name" name="name">
                            <label for="username">Student Roll:</label>
                            <input type="text" id="username" name="roll">
                        </div>
                        <div class="form-section">
    <label for="bookid">Book id:</label>
    <select id="bookid" name="bid">
        <?php
            $query = "SELECT Bid, book_name FROM book";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['Bid'] . "'>" . $row['Bid'] . " - " . $row['book_name'] . "</option>";
            }
        ?>
    </select>
</div>

                        <div class="form-section">
                            <label for="date">Date Of Issue:</label>
                            <input type="date" id="" name="issue" onchange="calculateReturnDate()">
                            
                        </div>
                        <div class="form-section">
                            <label for="date">Date Of return:</label>
                            <input type="date" id="" name="return" onchange="calculateReturnDate()">
                            
                        </div>
                        <button name="submit" type="submit" >Click Me!</button>
                       
                    </form>
                    
                </div>
            </div>
        </div>
            <?php
include('connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $bid = $_POST['bid'];
    $issue = $_POST['issue'];
    $return = $_POST['return'];
    $status = -1; // status is set to 0 by default

    $quer = "INSERT INTO issued VALUES ('$name', '$roll', '$bid', '$issue','$return', '$status')";
    $re = mysqli_query($conn, $quer);

    if($re){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
}
?>



<?php include('foot.php');?>
</body>

</html>