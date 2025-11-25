<?php
session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['Name'];

    $imgName = $_FILES['Img']['name'];     
    $tmpName = $_FILES['Img']['tmp_name']; 
    $folder = "../../UploadsForCategory/" . $imgName;    
    if(move_uploaded_file($tmpName, $folder)) {

        require_once '../Config/config.php';

        $sql = "INSERT INTO categories (Cate_Name, Img) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $imgName);

        if($stmt->execute()) {
            echo "<script>alert('Category Added Successfully'); 
            window.location='../../Html/index.php';</script>";
        } else {
            echo "<script>alert('Database Error: " . $stmt->error . "');</script>";
        }

        $stmt->close();
        $conn->close();

    } else {
        echo "<script>alert('Error uploading image');</script>";
    }
}
?>
