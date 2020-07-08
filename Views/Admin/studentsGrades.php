<!DOCTYPE html>
<?php
include 'sidNav.php';
?>

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
                                <th>Student</th>
                                <th>Quiz</th>
                                <th>percentage</th>
                                <th>Pass</th>
                                <th colspan="3" style=" padding-left: 2%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../../Models/dbConnection.php");
                            $users = mysqli_query($connect, "select * from user_quiz");
                            while ($row = mysqli_fetch_assoc($users)) {

                            ?>
                                <tr>
                                    <td><?php
                                        $userName = mysqli_query($connect, "select name from users where id=" . $row['user_id']);
                                        $name = mysqli_fetch_assoc($userName); 
                                        echo $name['name']; 
                                        ?>
                                    </td>
                                    <td><?php
                                        $quizName = mysqli_query($connect, "select name from Quiz where id=" . $row['quiz_id']);
                                        $name = mysqli_fetch_assoc($quizName); 
                                        echo $name['name']; 
                                        ?>
                                    </td>
                                    <td><?php echo $row['grade'] . "%"; ?></td>
                                    <td><?php echo $row['pass']; ?></td>
                                    <td>
                                        <form method="POST" action="" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="">
                                            <div class="btn-group">
                                                <a style=" margin-left: 15px;margin-right: 15px;" href="editStudent.php/?id=<?php echo $row['id']; ?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i> </a>
                                                <a style=" margin-left: 15px;margin-right: 15px;" href="" id="<?php echo $row['id']; ?>" class="deletebtn btn btn-default btn-xs"><i class="far fa-trash-alt " style="color:red"></i> </a>
                                            </div>
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
    <script type="text/javascript" src="../../assets/js/deleteStudentsGrade.js"></script>
</body>