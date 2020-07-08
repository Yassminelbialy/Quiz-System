<!DOCTYPE html>

<?php
include 'editNav.php';
require_once("../../Models/dbConnection.php");
?>

<head>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <a href="../addQuestion.php/?id=<?php echo $_GET['id'] ?>" class="btn " style=" background-color: #2c3e50; color:honeydew;margin-left: 15px;"> Add Question </a>

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="appliedartists-table" style="text-align: center;">
                        <thead>
                            <tr>
                                <th width="10%">Question Number</th>
                                <th width="40%">Question Text</th>
                                <th width="30%">Answers </th>
                                <th width="20%" colspan="3" style=" padding-left: 2%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $users = mysqli_query($connect, "select * from Question where quiz_id=" . $_GET['id']);
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($users)) {
                                $i += +1;
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>

                                    <td><?php echo $row['text']; ?></td>
                                    <td><?php include 'answers.php'; ?></td>
                                    <td>
                                        <form method="POST" action="" accept-charset="UTF-8">
                                            <div class="btn-group">
                                                <a style=" margin-left: 15px;margin-right: 15px;" href="../editQuestion.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i> </a>

                                                <a style=" margin-left: 15px;margin-right: 15px;" href="" id="<?php echo $row['id']; ?>" class="Qdeletebtn btn btn-default btn-xs">
                                                    <i class="far fa-trash-alt " style="color:red"></i> </a>
                                        </form>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../../assets/js/deleteQuestion.js"></script>
</body>