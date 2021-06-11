<?php
// session_start();
// require_once('googleLogin/config.php');
 /*if(isset($_SESSION['access_token']))*/
   $auth = isset($_SESSION['access_token']);
?>
<html>
  <head>
    <?php require('links.php'); ?>
  <style>
  </style>
  </head>
  <body>
   <nav class="navbar navbar-inverse fixed-top bg-light">
     <a class="navbar-brand" href=""><img src="images/logo.png" height="50px" width="50px"></a>
     <div class="search">
       <form>
         <div>
           <input type="text" class="border border-secondary" placeholder="Search">&nbsp;<i class="fa fa-microphone"></i>
         </div>
       </form>
     </div>
   </nav>

  <div class="sidebar">
     <div id="openS" class="open" onclick="openSide();">
       <i class="fa fa-arrow-right"></i>
     </div>
     <div class=""><a href="http://localhost/fprjct/hpage.php"><i class="fa fa-home"></i>&nbsp;Home</a></div>
      <?php
      if($auth)
      //if(isset($_SESSION['access_token']))
      {
      ?>
     <div class=""><a style="text-decoration: none;" href="http://localhost/fprjct/googleLogin/logout.php"><i class="fa fa-pencil-square-o"></i>&nbsp;Sign Out</a></div>
     <div class=""><a style="text-decoration: none;" href="profile.php"><i class="fa fa-user"></i>&nbsp;Profile</a>
    <?php
      }
      else
      {
      ?>
     <div class=""><a style="text-decoration: none;" href="http://localhost/fprjct/googleLogin/login.php"><i class="fa fa-pencil-square-o"></i>&nbsp;Sign In</a></div>
      <?php
      }
      ?>
    </div>
  </div>
  </body>
  <script>
    function openSide()
     {
       const sidebar = document.querySelector(".sidebar");
       const fa = document.querySelector(".fa-arrow-right");
       sidebar.classList.toggle("active");
       fa.classList.toggle("active");
     }
  </script>
</html>