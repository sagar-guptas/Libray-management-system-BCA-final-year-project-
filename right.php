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
        
.left{
    margin: 0 40px 0 0;
    width: 25%;
    background-color: #f8f9fa;
    height: 500px;
  
}
.menu{
    
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;

}
.menu ,a{
    margin: 8px;
    padding: 5px 0;
    font-size: larger;
    text-decoration: none;
    color: gray; 

}
    a:visited { color: orange; }
    a:hover { color: red; }
    </style>
</head>
<body>
<div class="left">
            <!-- <h3>Menu</h3> -->
            <div class="menu">
                <a href="sign.php">Add A Member ></a>
                <!-- <a href="teacher_sign.php">Add Teacher ></a> -->
                <a href="add.php">Add A Book  ></a>
                <a href="list.php">List Book ></a>
                <a href="issued_book.php">Issued Book > </a>
                <a href="issue_book.php">Issue Book > </a>
                <a href="category.php">List Of Student ></a>
                <a href="list_teacher.php">List Teacher></a>
                <a href="post_notice.php">Post Notice ></a>
            </div>
        </div>
</body>
</html>