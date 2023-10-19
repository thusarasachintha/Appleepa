<?php
include 'student.php';

$index = $_POST["index"];
$name =$_POST["name"];
$encourse =$_POST["encourse"];
$date =$_POST["date"];
$status =$_POST["status"];

$sql = "INSERT INTO Student_info
(index_number,student_name,courses,date,status) 
VALUES ('$index', '$name', '$encourse', '$date', '$status')";

if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
} else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>