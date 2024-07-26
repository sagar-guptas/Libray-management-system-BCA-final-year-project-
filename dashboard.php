<?php include('connection.php');
session_start();
$user_name=$_SESSION['username'];
// echo$user_name;
?>

<?php
$query = "SELECT * FROM book";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

$student = "SELECT * FROM student";
$studentData = mysqli_query($conn, $student);


?>
<?php
$que = "SELECT roll FROM student WHERE username = '$user_name'";
$res = mysqli_query($conn, $que);

if(mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
$roll=$row["roll"];
        // echo "Roll Number: " .$roll ;
    }
} else {
    echo "No results found.";
}
?>
<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    *{
    padding: 0px;
    margin: 0px;
    font-family: 'Arial', sans-serif; /* Changed font to Arial for a more modern look */
}

nav{
    background-color: rgb(251, 251, 251);
    /* padding-top: 9px;
    padding-bottom: 9px; */
}
ul{
    color: rgb(6, 133, 244);
    align-items: center;
    display: flex;
    justify-content: space-between;
    padding-left: 5px;
    padding: 2px 0px 2px 50px;
    
}
li{
    list-style: none;
    padding: 0px 15px 0px 15px;
}
.mf{
  /* height: 25px; */
  width: 200px;
}

body {
    background-color: #f4f4f4; /* Added a light background color for the whole page */
}
.card {
    align-items: center;
    display: flex;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    flex-wrap: wrap;
    flex-direction: column;
    padding-bottom: 20px;
    padding-top: 20px;
    margin: 10px;
    width: 16%;
    border-radius: 10px; /* Added border radius to cards */
    background-color: #f8f9fa; /* Added a light background color to the card */
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); /* Increased the hover shadow for a more pronounced effect */
}

.container {
  width: 80%;
    background-color: rgb(255, 255, 255);
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
    padding: 2px 16px 20px 16px;
}

.ccontainer {
    /* text-align: center;  */
    padding: 10px; /* Added some padding around the text */
}

.saf {
    width: 100px;
    border-radius: 5px; /* Added border radius to the image for a softer look */
}

.saf{
width: 100px;
}

.nnav{
    background-color: rgb(255, 255, 255);
    display: flex;
    justify-content: space-evenly;
    padding: 10px 30px 10px 30px;
}
.gro{
    padding: 0px 10px 0px 10px;
    text-align: center;
    font-size: small;
}
.gro img{
    height: 65px;
}
a {
    text-decoration:none;
    display: flex;
    flex-direction: column;
    /* align-content: space-around; */
    justify-content: space-between;
    align-items: center;
}



/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.search-container {
    display: flex;
    align-items: center;
    position: relative;
}

.nott{
  width: 16%;
  padding-left: 20px;

}
.not{
  text-align: center;
  padding: 20px 0;
}
.sada{
  display: flex;
  justify-content: space-between;
}
tr:before {
    content: "";
    height: 10px;
    display: block;
}
tr:after {
    content: "";
    height: 10px;
    display: block;
}

td {
    width: 62%;
}
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>

<nav>
        <ul>
            <li> <a href="index.php">
                <img  class="mf" src="utility/icon/bo.png" alt="" srcset="">

            </a>
            </li>
            <li>
                <h3>Welcome 
                <a href="page.php?user=<?php echo $roll; ?>">
                <?php echo $user_name;  ?>
                </h3>
                <a href="logout.php">Log Out</a>

            </li>
        </ul>
    </nav>
    
  <!-- second nav -->
  
    <div class="nnav">

      <a href="http://">
          <div class="gro">
          <!-- <img src="utility/dj/1.webp" alt=""> -->
          <h3>Web-dev</h3>
        </div>
      </a>
      <a href="http://">
        <div class="gro">
          <!-- <img src="utility/dj/2.webp" alt=""> -->
          <h3>Dev-opps</h3>
        </div>
      </a>
      <a href="http://">
        <div class="gro">
          <!-- <img src="utility/dj/3.webp" alt=""> -->
          <h3>Cybersecutity</h3>
        </div>
      </a>
      <a href="http://">
        <div class="gro">
          <!-- <img src="utility/dj/4.webp" alt=""> -->
          <h3>C++</h3>
        </div>
      </a>
      <a href="http://">
        <div class="gro">
          <!-- <img src="utility/dj/5.webp" alt=""> -->
          <h3>Android</h3>
        </div>
      </a>

      <a href="http://">
        <div class="gro">
          <!-- <img src="utility/dj/7.webp" alt=""> -->
          <h3>Flutter</h3>
        </div>
      </a>

      <a href="http://">
        <div class="gro">
          <!-- <img src="utility/dj/8.png" alt=""> -->
          <h3>XML</h3>
        </div>
      </a>
    </div>

    
  <div class="sada">
      <div class="container">
          <?php
                  if($total !=0)
                  {
                      ?>

                      <?php
                      
                      while($result = mysqli_fetch_assoc($data))
                      { $student = mysqli_fetch_assoc($studentData);
                          echo 
                      " <div class='card'>
                      <a  href='myproductpage.php?Bid=$result[Bid]&roll=$roll'>
                      <img class='saf' src ='".$result['product_image1']."'width: 100px;'>
                      <div class='ccontainer'>
                          <h4>".$result['book_name']."</h4>
                          <p>".$result['author_Name']."</p>
                          <p>".$result['Bid']."</p>
                          </div>
                          </a>
                          </div>

                  "; }
              }
                  ?>
           </div>
              <div class="nott">     
                <h3 class="not">Notice</h3>
                          <?php
                  $query = "SELECT * FROM notice ";
                  $data = mysqli_query($conn,$query);

                  $total = mysqli_num_rows($data);

                  if($total != 0) {
                      while($result = mysqli_fetch_assoc($data)) {
                          echo "
                          <table class='notice'>
                          <tr>
                              <td style='padding: 10px;'>".$result['message']."</td>
                              <td style='padding: 10px;'><a href='".$result['file']."' target='_blank'>Download</a></td>
                          </tr>
                      </table>

                          ";
                      }
                  } else {
                      echo "No notices found.";
                  }
                  ?>
                </div>  
                </div>
</body>
</html>

