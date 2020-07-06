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
    if (!empty($_POST["text"])) {
        $text = mysqli_escape_string($connect, $_POST['text']);
        $text = trim($text);
        $is_correct=$_POST['is_correct'];
        $question_id=$_POST["question_id"];
        if($is_correct=="on")
        $is_correct=0;
        else 
        $is_correct=1;
        $result = "";

        $result = mysqli_query($connect, "insert into Answer set text='$text',is_correct='$is_correct',question_id='$question_id'");
        echo "**********";

        var_dump($question_id);
        echo "**********";
        var_dump($text);
        var_dump($is_correct);
        if ($result) {
            header("Location:../Views/Admin/quizQuestions.php/?id=12");
            echo "done";
        } else {
            // header("Location:../Views/.php");
            echo "Result false";
        }
    } else {
        header("Location:../Views/Admin/addQuiz.php");
        echo "Must Enter All Fields";
    }
}
