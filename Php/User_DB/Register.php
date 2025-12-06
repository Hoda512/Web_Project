<?php
if(isset($_POST['Register_Submit'])) {
    $name = $_POST['FirstName'] . ' ' . $_POST['LastName'];
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $confirmPassword = $_POST['ConfirmPassword'];
    
    // Check if passwords match
    if($pass != $confirmPassword) {
        echo "<script>alert('Password Is not Equal Confirm Password'); window.history.back();</script>";
        exit();
    }
    
    require_once '../Config/config.php'; 
    if(!$con) {
        die(mysqli_connect_error());
    }

    
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO `users`(`Name`, `Email`, `Password`, `Role`) 
        VALUES ('$name', '$email', '$hashed_password', 'user')";
    
    if(mysqli_query($con, $query)) {
        echo "<script>alert('Registration successful!'); window.location='../../Html/index.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "'); window.history.back();</script>";
    }

    mysqli_close($con);
}
?>