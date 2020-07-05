<?php
// DB connection
include '../Models/dbConnection.php';
// update question
if (isset($_POST["done"])) {
    $text = mysqli_escape_string($connect, $_POST['text']);
    $text = trim($text);
    $result = "";
    $query = "update Question set text='$text' where id=" . $_POST['id'];
    $result = mysqli_query($connect, $query);
    $quiz_id=$_POST["quiz_id"];
    if ($result) {
        header("Location:../Views/Admin/quizQuestions.php/?id=$quiz_id");
    } else {
        echo "Result false";
    }
    // delete question
} elseif (isset($_POST["questionID"])) {
    $query = "delete from Question where id=" . $_POST["questionID"];
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "success";
    }
    // add question
} else if (isset($_POST["add"])) {
    if (!empty($_POST["text"])) {
        $text = mysqli_escape_string($connect, $_POST['text']);
        $quiz_id = mysqli_escape_string($connect, $_POST['quiz_id']);

        $text = trim($text);
        $result = "";

        $result = mysqli_query($connect, "insert into Question set text='$text',quiz_id='$quiz_id'");
        var_dump($quiz_id);
        if ($result) {
            header("Location:../Views/Admin/quizQuestions.php/?id=$quiz_id");
            echo "done";

        } else {
            // header("Location:../Views/.php");
            echo "Result false";
        }
    } else {
        header("Location:../Views/Admin/addQuiz.php/?id=$quiz_id");
        echo "Must Enter All Fields";
    }
}
