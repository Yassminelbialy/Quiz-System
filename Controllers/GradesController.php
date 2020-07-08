<?php
// DB connection
include '../Models/dbConnection.php';
if (isset($_POST["done"])) {
    $name = mysqli_escape_string($connect, $_POST['name']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $name = trim($name);
    $email = trim($email);
    $result = "";
    $query = "update users set name='$name',email='$email'where id=" . $_POST['id'];
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location:../Views/Admin/allStudents.php");
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
