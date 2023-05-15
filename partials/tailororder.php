<?php
include('../partials/_dbconnect.php');

if(isset($_POST['submit'])){


	
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city =  $_POST['city'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $numcard = $_POST['cardnum'];
    $noteorder = $_POST['order'];
    $typestyle = $_POST['typestyle'];
    $qyasishan = $_POST['sshan'];
    $panibal = $_POST['pball'];
    $qyasisng = $_POST['ssng'];
    $drezhiqol = $_POST['sqol'];
    $drezhibla = $_POST['sbala'];
    $tailorid = $_POST['submit'];
$tailorid = preg_replace('/[^0-9]/', '', $tailorid);





    // Sanitize user input
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $phone = mysqli_real_escape_string($conn, $phone);
    $city = mysqli_real_escape_string($conn, $city);
    $address = mysqli_real_escape_string($conn, $address);
    $gender = mysqli_real_escape_string($conn, $gender);
    $numcard = mysqli_real_escape_string($conn, $numcard);
    $noteorder = mysqli_real_escape_string($conn, $noteorder);
    $typestyle = mysqli_real_escape_string($conn, $typestyle);
    $qyasishan = mysqli_real_escape_string($conn, $qyasishan);
    $panibal = mysqli_real_escape_string($conn, $panibal);
    $qyasisng = mysqli_real_escape_string($conn, $qyasisng);
    $drezhiqol = mysqli_real_escape_string($conn, $drezhiqol);
    $drezhibla = mysqli_real_escape_string($conn, $drezhibla);
    $tailorid = mysqli_real_escape_string($conn, $tailorid);

    // // Prepare and execute SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO `tailor` (`User_ID`, `Name`, `Email`, `Phone`, `City`, `Address`, `Gender`, `Numcard`, `Noteorder`, `Typestyle`, `Qyasishan`, `Panibal`, `Qyasisng`, `Drezhiqol`, `Drezhibla`, `Tailorid`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssssssssssss", $name, $email, $phone, $city, $address, $gender, $numcard, $noteorder, $typestyle, $qyasishan, $panibal, $qyasisng, $drezhiqol, $drezhibla, $tailorid);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: /OnlineKC/tailorstyle.php");
    } else {
        $showError = mysqli_error($conn);
        header("Location: /OnlineKC/index.php?signupsuccess=false&error=$showError");
    }

    mysqli_stmt_close($stmt);
}
