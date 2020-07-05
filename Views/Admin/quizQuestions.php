<!DOCTYPE html>

<?php
include 'editNav.php';
?>
<a href="addQuiz.php" class="btn " style=" background-color: #428bca; color:honeydew;margin-left: 15px;"> Add Quiz </a>
<head>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        .content {
            min-height: 250px;
            padding: 15px;
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="appliedartists-table">
                        <thead>
                            <tr>
                                <th>Question Text</th>
                                <th>Answers</th>

                                <th colspan="3" style=" padding-left: 2%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../../Models/dbConnection.php");
                            $users = mysqli_query($connect, "select * from Question where quiz_id=" . $_GET['id']);
                            while ($row = mysqli_fetch_assoc($users)) {

                            ?>
                                <tr>
                                    <td><?php echo $row['text']; ?></td>
                                    <td><?php echo $row['id']; ?></td>
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