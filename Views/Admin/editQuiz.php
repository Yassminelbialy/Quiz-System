<!DOCTYPE html>
<?php
 include 'editNav.php';
?>
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
                            <?php
                            require_once("../../Models/dbConnection.php");
                            if (isset($_GET['id'])) {
                                $user = mysqli_query($connect, "select * from Quiz where id=" . $_GET['id']);
                                while ($row = mysqli_fetch_assoc($user)) {

                            ?>
                                    <tr>
                                        <form method="POST" action="../../../Controllers/QuizController.php" accept-charset="UTF-8">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <td><input type="text" name="name" id="" value="<?php echo $row['name']; ?>"> </td>
                                            <td><input type="text" name="Score" id="" value="<?php echo $row['Score']; ?>"> </td>
                                            <td>
                                                <div class="btn-group">
                                                    <input type="submit" value="Update" name="done" class="btn " style=" background-color: #428bca; color:honeydew;">
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