<?php
$answers = mysqli_query($connect, "select * from Answer where question_id=" . $row['id']);
while ($ans = mysqli_fetch_assoc($answers)) { ?>
    <?php echo $ans['text'];
        
    if ($ans['is_correct'] == 1)
        echo " ----> <strong>True </strong>";
    else 
        echo " ----><strong> False </strong>";
        echo "<br>";

        ?>
          <a style=" margin-left: 15px;margin-right: 15px;" href="editQuiz.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i> </a>
    <a style=" margin-left: 15px;margin-right: 15px;" href="" id="<?php echo $row['id']; ?>" class="deletebtn btn btn-default btn-xs"><i class="far fa-trash-alt " style="color:red"></i> </a>
    <a href="quizQuestions.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"> </div><i class="fas fa-info"></i> </a>
    <br>
  

<?php }
