<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $facebook = $_POST["facebook"];
    $insta = $_POST["insta"]; 
    // Check whether this username exists
    $existSql = "SELECT * FROM `Tailorregester` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
        header("Location: /OnlineKC/index.php?signupsuccess=false&error=$showError");
    }
    else{
      if(($password == $cpassword)){
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO `Tailorregester` ( `username`, `firstName`, `lastName`, `email`, `phone`, `password`, `joinDate`,facebooklink,instalink) VALUES ('$username', '$firstName', '$lastName', '$email', '$phone', '$hash', current_timestamp(),'$facebook','$insta')";   
          $result = mysqli_query($conn, $sql);
          if ($result){
              $showAlert = true;
              header("Location: /OnlineKC/index.php?signupsuccess=true");
          }
      }
      else{
          $showError = "Passwords do not match";
          header("Location: /OnlineKC/index.php?signupsuccess=false&error=$showError");
      }
    }
}
    
?>