<!-- <!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Popup Login Form Design | CodingNepal</title>
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="center">
        <input type="checkbox" id="show">
        <label for="show" class="show-btn">View Form</label>
        <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">Login Form</div>
            <form action="#">
                <div class="data">
                    <label>Email or Phone</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label>Password</label>
                    <input type="password" required>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a></div>
                <div class="btn">
                    <div class="inner">
                    </div>
                    <button type="submit">login</button>
                </div>
                <div class="signup-link">
                    Not a member? <a href="#">Signup now</a></div>
            </form>
        </div>
    </div>
</body>

</html> -->











<?php
// Initialize the session

// session_start();
 

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } 
    else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } 
    else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){

        $pass = md5($password);
        
        // Prepare a select statement
        $login = mysqli_query($conn,"SELECT * FROM users WHERE `email`='$email'");
        $row = mysqli_fetch_array($login,MYSQLI_ASSOC);

        //$sql = "SELECT id, email, password FROM users WHERE email = '$email'";
        
        if($row['email'] == $_POST['email'] && $row['password'] == $pass) {
            session_start();
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["email"] = $email;
            // Redirect user to welcome page
            header("location: index.php");
        } else {
            header("location: login.php");
            echo "no account found";
            die;
        }
    }
    
}


include('config1.php');

$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="sign-in-with-google.png" /></a>';
}




?>






<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
    <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="wrapper">
            <div class="title">Login </div>
            <form action="<?php echo htmlspecialchars($_SERVER["localhost"]); ?>" method="post">
            <div class="field form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
                <span class="help-block"><?php echo $email_err; ?></span>
                <label>Email Address</label>
            </div>
            <div class="field form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
                <span class="help-block"><?php echo $password_err; ?></span>
                <label>Password</label>
            </div>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="forgot.php">Forgot password?</a></div>
                </div>
                <div class="field">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">
                    
                <?php
                    if($login_button == '')
                    {
                       
                        echo '<h3><a href="logout.php">Logout</h3></div>';
                    }
                    else
                    {
                        echo ' <p>Login with google</p><div align="center">'.$login_button . '</div>';
                    }
                    ?>
                </div>


                <div class="signup-link">
                    Not a member? <a href="signup.php">Signup now</a></div>

                <div class="signup-link">
                    Continue as <a href="index.php">guest?</a></div>
            </form>
        </div>