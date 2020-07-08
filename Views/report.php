<?php
include "userNav.php";
include '../Models/dbConnection.php';

$user_id = $_SESSION['id'];
$quiz_id = $_POST['quiz_id'];
$questions = mysqli_query($connect, "select * from Question where quiz_id=" . $_POST['quiz_id']);
$true_answer = 0;
$total_questions = 0;
$pass_result = "";

?>
<!-- table -->
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped" id="appliedartists-table">
                    <thead>
                        <tr>
                            <th>Q. Num</th>
                            <th>Answers</th>
                            <th>Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($questions)) {
                            $i += +1;
                            $id = $row['id']; //the question id
                            $_POST[$id]; // the answer
                            $is_correct = mysqli_query($connect, "select * from Answer where id=" . $_POST[$id]);
                            $row = mysqli_fetch_assoc($is_correct);
                            $total_questions += +1;

                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row["text"] ?></td>
                                <td>
                                    <?php if ($row["is_correct"] == 1) {
                                        echo "<p style='color:green'>True </p>";
                                        $true_answer += +1;
                                    } else {
                                        echo "<p style='color:red'> False </p>";
                                    } ?>
                                </td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

                <?php
                $percent = ($true_answer / $total_questions) ;
                if ($percent >= 0.5) 
                    $pass_result = "pass";   
                else
                $pass_result = "fail";
                $percent=$percent*100;
                $result = mysqli_query($connect, "insert into user_quiz set user_id='$user_id',quiz_id='$quiz_id'
                                , pass='$pass_result', grade='$percent' ");
                echo "   <h2 style='text-align:center'>Grade $percent %</h2>";
                echo " <h2 style='text-align:center'>Status $pass_result  </h2>";
                ?>
                <div class="text-center">
                <a class="btn-primary"style='margin-right:0 auto' href="student.php">Back Home</a>
                </div>
            </div>
        </div>
    </div>
</div>