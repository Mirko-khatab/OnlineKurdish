<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    $sql = "Select * from users where username='$username'"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $row=mysqli_fetch_assoc($result);
        $userType = $row['userType'];
        if($userType == 1) {
            $userId = $row['id'];
                session_start();
                $_SESSION['adminloggedin'] = true;
                $_SESSION['adminusername'] = $username;
                $_SESSION['adminuserId'] = $userId;
                header("location: /OnlineKC/admin/index.php?loginsuccess=true");
                
           
        }
        else {
            header("location: /OnlineKC/admin/login.php?loginsuccess=false");
        }
    } 
    else{
        header("location: /OnlineKC/admin/login.php?loginsuccess=false");
    }
}    
?>