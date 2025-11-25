<?php
session_start();

if(isset($_POST['submit'])) {
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    
    require_once '../Config/config.php'; 
    
    $sql = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        
        


        
        if (password_verify($pass, $user["Password"])) {
            $_SESSION["Name"] = $user["Name"];
            $_SESSION["User_Id"] = $user["User_Id"];
            $_SESSION["Role"] = $user["Role"];
            $_SESSION["Email"] = $user["Email"];
            
            header('Location: ../../Html/Home.php');
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('No user found with this email!'); window.history.back();</script>";
        exit();
    }
    
    $stmt->close();
    $conn->close();
}
?>