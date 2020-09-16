<?php
error_reporting(E_ALL);

// $result = mysqli_query($conn,"SELECT * FROM users");

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        
        // Prepare a select statement
        $sql = mysqli_query($conn,"SELECT * FROM users WHERE `email`='.$email.'");
        // $sql = mysqli_query($conn,"SELECT * FROM users WHERE `email`='vema@gmai.com'");
        
        if ($sql->num_rows > 0) {
            $email_err = "This email is already taken.";
        } else {
            $email = trim($_POST["email"]);
            
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        $pass = md5($password);
        
        // Prepare an insert statement
        // $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
        $result1 = mysqli_query($conn,"INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$pass')");  
        
        if($result1){
            // Redirect to login page
            header("location: login.php");
        } else{
            echo "Something went wrong. Please try different email.";
        }
    }
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
    <div class="wrapper" id="tab-1">
        <div class="title">Signup</div>
        <form action="<?php echo htmlspecialchars($_SERVER["localhost"]); ?>" method="post">
            <div class="field form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                <span class="help-block"><?php echo $email_err; ?></span>
                <label>Email Address</label>
            </div>
            <div class="field form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>       
                <label>Password</label>
            </div>
            <div class="field form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input  type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" required>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>  
                <span class="help-block"><?php echo $password_err; ?></span>           

                <label>Re-enter Password</label>
            </div>
            <div class="content">
                <!-- <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div> -->
                <!-- <div class="pass-link">
                    <a href="#">Forgot password?</a></div> -->
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">
                <a href="login.php">Sign in</a></div>

            <div class="signup-link">
                Continue as <a href="index.php">guest?</a></div>
        </form>
    </div>
    </section>

</body>

</html>