<?php
// DB connection
include '../Models/dbConnection.php';
// update answer
if (isset($_POST["done"])) {
    $text = mysqli_escape_string($connect, $_POST['text']);
    $text = trim($text);
    $question_id = $_POST["question_id"];
    $is_correct = $_POST['is_correct'];
    if ($is_correct == "on")
        $is_correct = 0;
    else
        $is_correct = 1;
    $result = "";
    $findQuizID = mysqli_query($connect, "select quiz_id from Question where id=" .$question_id);
    $quizId = mysqli_fetch_assoc($findQuizID);
    $quiz_id=$quizId['quiz_id'];
    $query = "update Answer set text='$text',is_correct='$is_correct' where id=" . $_POST['id'];
    var_dump($quiz_id);
    
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location:../Views/Admin/quizQuestions.php/?id=$quiz_id");
        echo "Donnnnnnnnnnnnnne";
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
        $question_id = $_POST["question_id"];
        
        $is_correct = $_POST['is_correct'];
        if ($is_correct == "on")
            $is_correct = 0;
        else
            $is_correct = 1;
        $result = "";
        // var_dump($quiz_id);
        $findQuizID = mysqli_query($connect, "select quiz_id from Question where id=" .$question_id);
        $quizId = mysqli_fetch_assoc($findQuizID);
        $quiz_id=$quizId['quiz_id'];
        $result = mysqli_query($connect, "insert into Answer set text='$text',is_correct='$is_correct',question_id='$question_id'");
        if ($result) {
            var_dump($result);
            header("Location:../Views/Admin/quizQuestions.php/?id=$quiz_id");
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
