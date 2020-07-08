<!DOCTYPE html>
<html>
<?php
include 'editNav.php';
?>

<!-- Table -->
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped" id="appliedartists-table">
                    <thead>
                        <tr>
                            <th>Answer Text</th>
                            <th>False Answer</th>
                            <th colspan="3" style=" padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../../Models/dbConnection.php");
                        if (isset($_GET['id'])) {
                            $answer = mysqli_query($connect, "select * from Answer where id=" . $_GET['id']);
                            
                            while ($row = mysqli_fetch_assoc($answer)) {
                               

                        ?>
                                <tr>
                                    <form method="POST" action="../../../Controllers/AnswerController.php" accept-charset="UTF-8">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="question_id" value="<?php echo $row['question_id']; ?>">
                                        <td><input type="text" class="form-control" name="text" id="" value="<?php echo $row['text']; ?>"> </td>
                                        <td> 
                                        <?php if ($row['is_correct']==0)    
                                        echo '<input type="checkbox" id="scales" name="is_correct" checked>';
                                        else echo'<input type="checkbox" id="scales" name="is_correct"  >';
                                        ?></td>

                                        <td>
                                            <div class="btn-group">
                                                <input type="submit" value="Update" name="done" class="btn " style=" background-color: #2c3e50; color:honeydew;">
                                            </div>
                                    </form>
                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</html>