<?php
error_reporting(E_ALL);

// $result = mysqli_query($conn,"SELECT * FROM users");

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted


if(isset($_POST['submit'])){
  
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        // Prepare a select statement
        $sql = mysqli_query($conn,"SELECT * FROM users WHERE `email`='.$email.'");
        $emailcount = mysqli_num_row($sql);
        print_r($emailcount);
        die;



    
    // Check input errors before inserting in database
    if(empty($email_err)){

        
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
        <div class="title">Password Recover</div>
        <form action="<?php echo htmlspecialchars($_SERVER["localhost"]); ?>" method="post">
            <div class="field form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                <span class="help-block"><?php echo $email_err; ?></span>
                <label>Email Address</label>
            </div>


            <div class="field">
                <input type="submit" value="Send Email" name="submit">
            </div>

            <div class="signup-link">
                Continue as <a href="index.php">guest?</a></div>
        </form>
    </div>
    </section>

</body>

</html>