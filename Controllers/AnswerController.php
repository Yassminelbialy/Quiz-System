<?php
// DB connection
include '../Models/dbConnection.php';
// update answer
if (isset($_POST["done"])) {
    $name = mysqli_escape_string($connect, $_POST['name']);
    $Score = mysqli_escape_string($connect, $_POST['Score']);
    $name = trim($name);
    $Score = trim($Score);
    $result = "";
    $query = "update Quiz set name='$name',Score='$Score'where id=" . $_POST['id'];
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location:../Views/Admin/allQuizzes.php");
        // echo "Donnnnnnnnnnnnnne";
    } else {
        echo "Result false";
    }
    // delete answer
} elseif (isset($_POST["ansID"])) {
    echo $_POST["ansID"];
    $query = "delete from Answer where id=" . $_POST["ansID"];
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "success";
    }
    // add answer
} else if (isset($_POST["add"])) {
    if (!empty($_POST["name"]) && !empty($_POST["Score"])) {
        $name = mysqli_escape_string($connect, $_POST['name']);
        $Score = mysqli_escape_string($connect, $_POST['Score']);

        $name = trim($name);
        $Score = trim($Score);
        $result = "";

        $result = mysqli_query($connect, "insert into Quiz set name='$name',Score='$Score'");
        var_dump($Score);
        if ($result) {
            header("Location:../Views/Admin/allQuizzes.php");
        } else {
            // header("Location:../Views/.php");
            echo "Result false";
        }
    } else {
        header("Location:../Views/Admin/addQuiz.php");
        echo "Must Enter All Fields";
    }
}
