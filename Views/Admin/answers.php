<?php
$answers = mysqli_query($connect, "select * from Answer where question_id=" . $row['id']);
?>
<a href="../addAnswer.php/?id=<?php echo $row['id']; ?>" class="btn" style=" background-color: #2c3e50; color:honeydew;margin-left: 15px;"> <i class="fas fa-plus"></i></a>
<br><br>
<?php
while ($ans = mysqli_fetch_assoc($answers)) { ?>
    <?php echo $ans['text'];

    if ($ans['is_correct'] == 1)

        echo ' <p  class="btn" style="color:green;margin-left: 15px;">
       True</p>';

    else
        echo ' <p  class="btn" style=" color:red;margin-left: 15px;">
        False</p>';
    ?>
    <br>
    <a style=" margin-left: 15px;margin-right: 15px;" href="../editAnswer.php/?id=<?php echo $ans['id']; ?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i> </a>
    <a style=" margin-left: 15px;margin-right: 15px;" href="" id="<?php echo $ans['id']; ?>" class="deletebtn btn btn-default btn-xs"><i class="far fa-trash-alt " style="color:red"></i> </a>
    <hr><br>

<?php } ?>

<script type="text/javascript" src="../../../assets/js/deleteAnswer.js"></script>