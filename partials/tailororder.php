<?php
include('../partials/_dbconnect.php');
if(isset($_POST['submit'])){
	  
       $Uname = mysqli_real_escape_string($conn,$_POST['name']);
         $Uemail = mysqli_real_escape_string($conn,$_POST['email']);
	      $Uphone =mysqli_real_escape_string($conn,$_POST['phone']);
    $Ucity = mysqli_real_escape_string($conn,$_POST['city']);
	   $Uaddress = mysqli_real_escape_string($conn,$_POST['address']);
    $Ugender = mysqli_real_escape_string($conn,$_POST['gender']);
	$Ucardnum = mysqli_real_escape_string($conn,$_POST['cardnum']);
	$Uorder = mysqli_real_escape_string($conn,$_POST['order']);
	$Utypestyle = mysqli_real_escape_string($conn,$_POST['typestyle']);
	$Usshan =mysqli_real_escape_string($conn,$_POST['sshan']);
	$Upball =mysqli_real_escape_string($conn,$_POST['pball']);
	$Ussng = mysqli_real_escape_string($conn,$_POST['ssng']);
	$Usqol =mysqli_real_escape_string($conn,$_POST['sqol']);
	$Usbala =mysqli_real_escape_string($conn,$_POST['sbala']);
	$tailorid =mysqli_real_escape_string($conn,$_POST['submit']);
	$sharwal =mysqli_real_escape_string($conn,$_POST['ssharwal']);
//echo all data in next line 
echo "username---------->".$Uname."<br>";
echo"email---------->". $Uemail."<br>";
echo "uphone---------->". $Uphone."<br>";
echo " city ---------->".$Ucity."<br>";
echo "addrase---------->".$Uaddress."<br>";
echo"gender---------->". $Ugender."<br>";
echo "order---------->".$Uorder."<br>";
echo "typstyle---------->".$Utypestyle."<br>";
echo "shan ---------->".$Usshan."<br>";
echo "ball---------->".$Upball."<br>";
echo "sng---------->".$Ussng."<br>";
echo "qol---------->".$Usqol."<br>";
echo "ball---------->".$Usbala."<br>";
//tailorid filter only number 
$tailorid = preg_replace('/[^0-9]/', '', $tailorid);
echo "tailorid---------->".$tailorid."<br>";



     
$sql = "INSERT INTO `tailor` (`User_ID`, `Name`, `Email`, `Phone`, `City`, `Address`, `Gender`, `drezheSharwal`, `Noteorder`, `Typestyle`, `Qyasishan`, `Panibal`, `Qyasisng`, `Drezhiqol`, `Drezhibla`, `Tailorid`) VALUES (NULL, '$Uname', '$Uemail', '$Uphone', '$Ucity', '$Uaddress', '$Ugender', '$sharwal', '$Uorder', '$Utypestyle', '$Usshan', '$Upball', '$Ussng', '$Usqol', '$Usbala', '$tailorid')";

// "INSERT INTO `tailor` (`User_ID`, `Name`, `Email`, `Phone`, `City`, `Address`, `Gender`, `Numcard`, `Noteorder`, `Typestyle`, `Qyasishan`, `Panibal`, `Qyasisng`, `Drezhiqol`, `Drezhibla,`Tailorid`) VALUES (NULL, '$Uname', '$Uemail', '$Ucardnum', '$Ucity', '$Uaddress', '$Ugender', '$Ucardnum', ' $Uorder', '$Utypestyle', '$Usshan', '$Upball', '$Ussng', '$Usqol', '$Usbala' ,'$tailorid');";  


$result = mysqli_query($conn, $sql);
if ($result){

    header("Location: /OnlineKC/tailorstyle.php");
}

else{
$showError = "sorry you have an error";
header("Location: /OnlineKC/index.php?signupsuccess=false&error=$showError");
}



}
 	 	   
?>