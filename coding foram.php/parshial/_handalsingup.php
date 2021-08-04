<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_email = $_POST['singupemail'];
    $pass = $_POST['singupPassword'];
    $cpass = $_POST['singupcPassword'];

    // Check whether this email exists
    $existSql ="SELECT * FROM `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timetemp`) VALUES (NULL, '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                $showAlert = true;
                header("Location:/index.php?singupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "Passwords do not match"; 

            
        }
    }
    header("Location:/index.php?signupsuccess=false&error=$showError");

}
?>