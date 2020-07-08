<?php
// DB connection
include '../Models/dbConnection.php';
if (isset($_POST["done"])) {
    $grade = mysqli_escape_string($connect, $_POST['grade']);
    $pass = mysqli_escape_string($connect, $_POST['pass']);
    $grade = trim($grade);
    $pass = trim($pass);
    $result = "";
    $query = "update user_quiz set grade='$grade',pass='$pass'where id=" . $_POST['id'];
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location:../Views/Admin/studentsGrades.php");
        // echo "Donnnnnnnnnnnnnne";
    } else {
        echo "Result false";
    }
} elseif (isset($_POST["userID"])) {
    $query = "delete from user_quiz where id=" . $_POST["userID"];
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "success";
    }
}
