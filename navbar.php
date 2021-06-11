<?php
/* require_once('googleLogin/config.php');*/
 $auth = isset($_SESSION['access_token']);
?>
<nav class="navbar navbar-inverse navbar-expand-sm fixed-top bg-light">
   <a class="navbar-brand" href=""><img src="images/logo.png" height="50px" width="50px"></a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseId"><i class="fa fa-bars"></i></button>-->
   <div id="collapseId" class="collapse navbar-collapse">
    <ul class="navbar-nav navbar-right mr-auto w-100 justify-content-end">
    <li class="nav-item justify-content-end">
            <form class="navbar-form navbar-left ex">
                  <input type="text" class="form-control" placeholder="Search" name="search" max>
            </form>
    </li>
     <li class="nav-item"><a style="text-decoration: none;" href="http://localhost/fprjct/hpage.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
     <?php
      if($auth)
      //if(isset($_SESSION['access_token']))
      {
      ?>
     <li class="nav-item"><a style="text-decoration: none;" href="http://localhost/fprjct/googleLogin/logout.php"><i class="fa fa-pencil-square-o"></i>&nbsp;Sign Out</a></li>
     <li class="nav-item" style="float:right;margin-right:-2%;"><a style="text-decoration: none;" href="http://localhost/fprjct/profile.php">&nbsp;<img class="rounded-circle" src="<?php echo $_SESSION['picture']; ?>" width="30px" height="30px"></a></li>
      <?php
      }
      else
      {
      ?>
     <li class="nav-item"><a style="text-decoration: none;" href="http://localhost/fprjct/googleLogin/login.php"><i class="fa fa-pencil-square-o"></i>&nbsp;Sign In</a></li>
      <?php
      }
      ?>
   <!--  <li class="nav-item"><a style="text-decoration: none;" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Register</a></li>-->
    </ul>
   </div>
  </nav>