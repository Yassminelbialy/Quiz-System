<?php
include 'sidNav.php';
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
                            <th>Name</th>
                            <th>Score</th>

                            <th colspan="3" style=" padding-left: 2%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form method="POST" action="../../Controllers/QuizController.php" accept-charset="UTF-8">
                                <td><input type="text" class="form-control" name="name" id="" placeholder="Enter Quiz Name"> </td>
                                <td><input type="text" class="form-control" name="Score" id="" placeholder="Enter quiz score"> </td>
                                <td>
                                    <div class="btn-group">
                                        <input type="submit" value="ADD" name="add" class="btn " style=" background-color: #2c3e50; color:honeydew;">
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