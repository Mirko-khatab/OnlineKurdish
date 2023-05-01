<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    $sql = "Select * from Tailorregester where username='$username' and accept=1"; 
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

 
 

if($num ==1 ){
    while($row = mysqli_fetch_assoc($result)){
        
        session_start();
    
        $_SESSION['tailorId'] = $row['id'];
        $_SESSION['Tailorlogin'] = true;
        $_SESSION['Tailorusername'] = $username;

        header("location: /OnlineKC/Tailorpanel/index.php?loginsuccess=true");
 
}
        
        
        }
        else{
            header("location: /OnlineKC/Tailorpanel/login.php?loginsuccess=false");
        }

 
   
}    
?>