<?php
require_once('googleLogin/config.php');
if(!isset($_SESSION['access_token']))
{
  header('Location:http://localhost/fprjct/hpage.php');
}
else
{
?>
<html>
  <head>
    <?php require('links.php'); ?>
    <style>
      .profile
      {
        margin-top:100px;
      /*  display:flex;
        justify-content:center;*/
      }
    </style>
  </head>
  <body>
<div id="mNav">
    <?php require('mobileNav.php'); ?>
  </div>
  <div id="lNav">
    <?php require('navbar.php'); ?>
  </div>
  <div class="profile">
     <div class="icard">
      <div class="card col-sm-5 col-md-8 icards">
        <img src="<?php echo $_SESSION['picture']; ?>" alt="trending" >
        <div class="card-body">
          <div class="card-content">
            <div class="card-title"><h4><?php echo $_SESSION['name']; ?></h4></div>
            <div class="card-text">
              <p><?php echo $_SESSION['email']; ?></p>
            </div>
          </div>
        </div>
      </div>
   </div>
  </div>
  </body>
</html>
<?php
}
?>