<?php include('connection.php');?>

<?php
$query = "SELECT * FROM student ";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



?>
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
        .right{
    width: 100%;
    background-color: #f8f9fa;
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
.foot{
    margin: 20px 0;
    background-color: #f8f9fa;
    display: flex;
    justify-content: space-between;

}
.feet{
    margin: 20px;
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
<div class="right">
            <div class="title"><h1>Student List</h1></div>

            <?php
            if($total !=0)
            {
                ?>

               
            
            <div class="tab">
            <table>
            <tr>
                <th>Name</th>
                <th>User Name</th>
                <th>Roll</th>
                <th>Dob</th>
                <th>gender</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Operation</th>
            </tr>
            <?php
                
                while($result = mysqli_fetch_assoc($data))
                { 
                    echo 
                " <tr>
                    <td>".$result['name']."</td>
                    <td>".$result['username']." </td>
                    <td>".$result['roll']."</td>
                    <td> ".$result['dob']."</td>
                    <td> ".$result['gender']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td><a class='btn' href='update.php?roll=$result[roll]&name=$result[name]' type='submit'>EDIT</a></td>
                   
                </tr>

             "; }
        }
            ?>
           
            </table>
        </div>
    </div>
</body>
</html>