<?php
// DB connection
include '../Models/dbConnection.php';
// var_dump($_POST["done"]);
if (isset($_POST["done"])) {
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        $name = mysqli_escape_string($connect, $_POST['name']);
        $password = mysqli_escape_string($connect, $_POST['password']);
        $email = mysqli_escape_string($connect, $_POST['email']);

        $name = trim($name);
        $password = trim($password);
        $email = trim($email);
        $rePassword = trim($rePassword);
        $result = "";

        $result = mysqli_query($connect, "insert into users set name='$name',email='$email',password='$password'");
        if ($result) {
            header("Location:../Views/student.php");
        } else {
            // header("Location:../Views/.php");
            echo "Result false";
        }
    } else {
        header("Location:../Views/register.php");
        echo "Must Enter All Fields";
    }
}
