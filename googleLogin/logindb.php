<?php 
session_start();
  include("connection.php");
  include("functions.php");
  include("gglln.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //read from database
      $query = "select * from users where user_name = '$user_name' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
          {

            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location:main.php");
            die;
          }
        }
      }
      
      echo "wrong username or password!";
    }else
    {
      echo "wrong username or password!";
    }
  }

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form  class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>

            <div class="input-field" >
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user_name" method="post"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"  name="password" method="post"/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with Google</p>
            <div class="social-media">
             
              <a href="#" class="social-icon">
                <i class="fab fa-google" onclick="window.location='<?php echo $google_client->createAuthUrl();?>'"></i>
              </a>
             
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Not Registered yet!Click to create your account!
            </p>
            <br><br>
           <a href="signup.php" id="button" type="submit">Signup</a><br><br>

          </div>
         
        </div>
    </div>

  </body>
</html>
