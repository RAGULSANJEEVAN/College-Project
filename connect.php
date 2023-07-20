<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthmonth = $_POST['birthmonth'];
$date = $_POST['date'];
$year = $_POST['year'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$areanumber = $_POST['areanumber'];
$phonenumber = $_POST['phonenumber'];
$saddress1 = $_POST['saddress1'];
$schoolname1 = $_POST['schoolname1'];
$board = $_POST['board'];
$schooladd1 = $_POST['schooladd1'];
$yeargraduated1 = $_POST['yeargraduated1'];
$marksscored1 = $_POST['marksscored1'];
$schoolname2 = $_POST['schoolname2'];
$board2 = $_POST['board2'];
$schooladd2 = $_POST['schooladd2'];
$degree = $_POST['degree'];
$stream = $_POST['stream'];

$conn = new mysqli('localhost','root','','applicationform');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insret into applicationform(firstname, lastname, birthmonth, date, year, gender, email, areanumber, phonenumber, saddress1, schoolname1, board1, schooladd1, yeargraduated1, marksscored1, schoolname2, board2, schooladd2, degree, stream)
    value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")
    $stmt ->bind_param("sssiissiissssiisssss",$firstname, $lastname, $birthmonth, $date, $year, $gender, $email, $areanumber, $phonenumber, $saddress1, $schoolname1, $board1, $schooladd1, $yeargraduated1, $marksscored1, $schoolname2, $board2, $schooladd2, $degree, $stream);
    $stmt ->execute();
    $stmt ->close();
    $conn->close();
}
?>
