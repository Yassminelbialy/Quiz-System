<!DOCTYPE html>

<?php
include 'sidNav.php';
?>

<body>
    <a href="addQuiz.php" class="btn " style=" background-color: #2c3e50; color:honeydew;margin-left: 15px;"> Add Quiz </a>

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="appliedartists-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Score</th>
                                <th colspan="3" style=" padding-left: 2%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../../Models/dbConnection.php");
                            $users = mysqli_query($connect, "select * from Quiz");
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($users)) {
                                $i += +1;
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>

                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['Score']; ?></td>
                                    <td>
                                        <form method="POST" action="" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="">
                                            <div class="btn-group">
                                                <a style=" margin-left: 15px;margin-right: 15px;" href="editQuiz.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i> </a>
                                                <a style=" margin-left: 15px;margin-right: 15px;" href="" id="<?php echo $row['id']; ?>" class="deletebtn btn btn-default btn-xs"><i class="far fa-trash-alt " style="color:red"></i> </a>
                                                <a href="quizQuestions.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"> </div><i class="fas fa-info"></i> </a>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../assets/js/deleteQuiz.js"></script>
</body>