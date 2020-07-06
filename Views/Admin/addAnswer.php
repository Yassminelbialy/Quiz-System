<?php
include 'editNav.php';
?>
<!DOCTYPE html>

<html>
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
                        <tr>
                            <form method="POST" action="../../../Controllers/AnswerController.php" accept-charset="UTF-8">
                                <td><input type="text" class="form-control" name="text" id="" placeholder="Enter Answer Text"> </td>
                                <td> <input type="checkbox" id="scales" name="is_correct" checked></td>
                                <td>
                                    <input type="hidden" name="question_id" value="<?php echo $_GET['id']?>">
                                    <div class="btn-group">
                                        <input type="submit" value="ADD" name="add" class="btn " style=" background-color: #428bca; color:honeydew;">
                                    </div>
                            </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

</html>