<?php
    include '_dbconnect.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
    error_reporting(E_ALL);
ini_set('display_errors', 1);

    if(isset($_POST['createCategory'])) {
        $name = $_POST["name"];
        $desc = $_POST["desc"];

$sql = 
"INSERT INTO `categories` (`categorieId`, `categorieName`, `categorieDesc`, `categorieCreateDate`, `itemId`) VALUES (NULL, '$name', '$desc', current_timestamp(), '0');";
        $result = mysqli_query($conn, $sql);
        $catId = $conn->insert_id;
        if($result) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                
                $newfilename = "cat-".$catId.".jpg";

                $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/OnlineKC/img/cimg/';
                $uploadfile = $uploaddir . $newfilename;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    echo "<script>alert('success');
                            window.location=document.referrer;
                        </script>";
                } else {
                    echo "<script>alert('failed to upload image');
                            window.location=document.referrer;
                        </script>";
                }

            }
            else{
                echo '<script>alert("Please select an image file to upload.");
                    </script>';
            }
        }
    }
    if(isset($_POST['removeCategory'])) {
        $catId = $_POST["catId"];
        $filename = $_SERVER['DOCUMENT_ROOT']."/OnlineKC/img/cimg/cat-".$catId.".jpg";
        $sql = "DELETE FROM `categories` WHERE `categorieId`='$catId'";   
        $result = mysqli_query($conn, $sql);
        if ($result){
            if (file_exists($filename)) {
                unlink($filename);
            }
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

        $sql = "UPDATE `categories` SET `categorieName`='$catName', `categorieDesc`='$catDesc' WHERE `categorieId`='$catId'";   
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "<script>alert('update');
                window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                window.location=document.referrer;
                </script>";
        }
    }
    if(isset($_POST['updateCatPhoto'])) {
        $catId = $_POST["catId"];
        $check = getimagesize($_FILES["catimage"]["tmp_name"]);
        if($check !== false) {
            $newName = 'cat-'.$catId;
            $newfilename=$newName .".jpg";

            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/OnlineKC/img/cimg/';
            $uploadfile = $uploaddir . $newfilename;

            if (move_uploaded_file($_FILES['catimage']['tmp_name'], $uploadfile)) {
                echo "<script>alert('success');
                        window.location=document.referrer;
                    </script>";
            } else {
                echo "<script>alert('failed');
                        window.location=document.referrer;
                    </script>";
            }
        }
        else{
            echo '<script>alert("Please select an image file to upload.");
            window.location=document.referrer;
                </script>';
        }
    }
}
?>