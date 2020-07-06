<?php
$answers = mysqli_query($connect, "select * from Answer where question_id=" . $row['id']);
?>
<a href="../addAnswer.php/?id=<?php echo $row['id']; ?>" class="btn" style=" background-color: #428bca; color:honeydew;margin-left: 15px;"> <i class="fas fa-plus"></i></a>
<br>
<?php
while ($ans = mysqli_fetch_assoc($answers)) { ?>
    <?php echo $ans['text'];

    if ($ans['is_correct'] == 1)

        echo ' <i style="color: green;" class="fas fa-check-square fa-1x"></i>';

    else
        echo ' <i style="color: red;" class="fas fa-times-circle fa-1x"></i>'
    ?>
    <br>
    <a style=" margin-left: 15px;margin-right: 15px;" href="../editAnswer.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i> </a>
    <a style=" margin-left: 15px;margin-right: 15px;" href="" id="<?php echo $row['id']; ?>" class="deletebtn btn btn-default btn-xs"><i class="far fa-trash-alt " style="color:red"></i> </a>
    <hr><br>

<?php } ?>

<script type="text/javascript" src="../../../assets/js/deleteAnswer.js"></script>