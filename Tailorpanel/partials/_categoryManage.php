<?php

session_start();
    include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['createCategory'])) {
        $name = $_POST["name"];
        $desc = $_POST["desc"];
        $file = $_FILES['image'];
        $Gender = $_POST['gender'] ;


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
                    $fileDestination='../uploads/'.$fileNewName;
                    move_uploaded_file($file_tmp,$fileDestination);
                    $sql = "INSERT INTO `tailorPost` (`tailorId`, `img`, `name`, `title`,`gender`) VALUES ('".$_SESSION['tailorId']."', '$fileNewName', '$name', '$desc','$Gender')";
                                        $result = mysqli_query($conn, $sql);
                    if ($result){
                        echo "<script>alert('add your data successfully');
                        window.location=document.referrer;
                        </script>";
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
    if(isset($_POST['removeCategory'])) {
        $catId = $_POST["catId"];
        $sql = "DELETE FROM `tailorPost` WHERE `id`='$catId'";   
        $result = mysqli_query($conn, $sql);
        if ($result){
         
            echo "<script>alert('Removed');
                window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                window.location=document.referrer;
                </script>";
        }
    }
    if(isset($_POST['updateCategory'])) {
        $catId = $_POST["catId"];
        $catName = $_POST["name"];
        $catDesc = $_POST["desc"];
        $Gender = $_POST['gender'] ;
        


        $file = $_FILES['catimage'];

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
        $fileDestination='../uploads/'.$fileNewName;
        move_uploaded_file($file_tmp,$fileDestination);
        $sql = "UPDATE `tailorPost` SET `img`='$fileNewName',`name`='$catName',`title`='$catDesc'  WHERE `id`='$catId'";
        $result = mysqli_query($conn, $sql);
        if ($result){
         
            echo "<script>alert('Updated');
                window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                window.location=document.referrer;
                </script>";
        }
        }
        else{
        echo "<script>alert('Your file is too big');
                window.location=document.referrer;
                </script>";
        }
        }
        else{
        echo "<script>alert('There was an error uploading your file');
                window.location=document.referrer;
                </script>";
        }
        }
        else{
        echo "<script>alert('You cannot upload files of this type');
                window.location=document.referrer;
                </script>";
        }
        





    }




}






        
    
    


?>