<?php 
session_start(); 
// var_dump($_SESSION['loggedin']);
// Include config file
require_once "config.php";

if($conn){
    echo "connected";
}
else{
    echo "error";
}
$select = "select * from users WHERE email='.$email.'";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);

$oldpass = $data['password'];

print_r($query);
die;

//$email = $data['email'];
if(isset($_POST['save']))
{
    $curpass = $_POST['currentPassword'];
    $newpass = $_POST['newPassword'];
    $conpass = $_POST['confirmPassword'];

    if($curpass == $oldpass)
    {
        if($newpass == $conpass)
        {
          // $update = "update users set `password` = '$newpass' where `email`='.$email.'";
            $query1 = mysqli_query($conn,$update);
            

            if($query1)
            {
                echo "You password changed successfully";
            }
            else
            {
                echo "You old and new password not match";
            }
            
        }

    }
    else
    {
        echo "You entered wrong password";

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
        <div class="title">Change Password</div>
        <form action="#" method="post">
            <div class="field">
                <input type="text" name="currentPassword" required>
                <label>Old Password</label>
            </div>
            <div class="field">
                <input type="text" name="newPassword" required>
                <label>New Password</label>
            </div>
            <div class="field">
                <input type="text" name="confirmPassword" required>
                <label>Confirm Password</label>
            </div>
            
            <div class="field">
                <input type="submit" value="Save" name="save">
            </div>
            <div class="signup-link">Back to Home
                 <a href="index.php">Home</a></div> 
        </form>
    </div>
    </section>

</body>

</html>