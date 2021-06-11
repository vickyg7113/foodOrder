<?php
require('connect.php');
$cat = $_GET['category'];
$type = $_GET['ftype'];
//echo "<h1>".$cat."</h1>";
if($type=="")
{
 $query = "SELECT * FROM `catdetails` WHERE `category`='$cat'";
 if($qrun = mysqli_query($conn,$query))
 {
   while($row = mysqli_fetch_assoc($qrun))
   {
     echo '<div class="card col-sm-5 col-md-5 icards">';
     echo '<div class="card-body">';
     echo '<section style="float:left">';
     echo '<img src="'.$row['image'].'" alt="" width="150px" height="150px">';
     echo '</section>';
     echo '<div>';
     echo '<h6 class="card-title" style="">'.$row['title'].'</h6>';
     echo '<div style="height:70px;overflow:auto;">';
     echo '<p class="card-text" style="">'.$row['descrn'].'</p>';
     echo '</div>';
     echo '<div style="float:right;margin-bottom:0px;">';
     echo '<button onclick="add();" class="btn btn-secondary" style="">Add+</button>';
     echo '</div>';
     echo '</div>';
     echo '</div>';
     echo '</div>';
   }
 }
}
else
{
$query = "SELECT * FROM `catdetails` WHERE `category`='$cat' AND `ftype`='$type'";
if($qrun = mysqli_query($conn,$query))
{
  while($row = mysqli_fetch_assoc($qrun))
  {
    echo '<div class="card col-sm-5 col-md-5 icards">';
    echo '<div class="card-body">';
    echo '<section style="float:left">';
    echo '<img src="'.$row['image'].'" alt="" width="150px" height="150px">';
    echo '</section>';
    echo '<div>';
    echo '<h6 class="card-title" style="">'.$row['title'].'</h6>';
    echo '<div style="height:70px;overflow:auto;">';
    echo '<p class="card-text" style="">'.$row['descrn'].'</p>';
    echo '</div>';
    echo '<div style="float:right;margin-bottom:0px;">';
    echo '<button onclick="add();" class="btn btn-secondary" style="">Add+</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}
}
?>