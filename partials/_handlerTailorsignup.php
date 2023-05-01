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
    $file = $_FILES['file'];
    $gender = $_POST["radio"];
    $about = $_POST["about"];
   


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
          $file_name=$file['name'];
$file_type=$file['type'];
$file_tmp=$file['tmp_name'];
$file_size=$file['size'];
$file_error=$file['error'];
$file_full_path=$file['full_path'];
$fileEXT=explode('.',$file_name);
$file_ActualEXT=strtolower(end($fileEXT));
$fileAllowed=array('png','jpg','jpeg','svg','giv');
if(in_array($file_ActualEXT,$fileAllowed)){
if($file_error===0){
if($file_size<1000000){
$fileNewName=uniqid('',true).".".$file_ActualEXT;
$fileDestination='../Tailorpanel/uploads/'.$fileNewName;


move_uploaded_file($file_tmp,$fileDestination);
$sql = "INSERT INTO `Tailorregester` ( `username`, `firstName`, `lastName`, `email`, `phone`, `password`, `joinDate`,`facebooklink`,`instalink`,`file`,`gender`,`about`,`accept`) VALUES ('$username', '$firstName', '$lastName', '$email', '$phone', '$hash', current_timestamp(),'$facebook','$insta','$fileNewName','$gender','$about',0)";   
$result = mysqli_query($conn, $sql);
          if ($result){
              
              header("Location: /OnlineKC/tailorstyle.php");
          }
}
else{
echo "Your file is too big";
}
}
else{
echo "There was an error uploading your file";
}
}
else{
echo "You cannot upload files of this type";
}
      }
      else{
          $showError = "Passwords do not match";
          header("Location: /OnlineKC/index.php?signupsuccess=false&error=$showError");
      }
    }
}

    
?>