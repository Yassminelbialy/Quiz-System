<!DOCTYPE html>

<head>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="../../assets/css/styles.css" rel="stylesheet" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <?php
    // include 'editNav.php';
    require_once("../Models/dbConnection.php");
    // echo $_GET["id"];
    ?>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger">Emodo</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1" style="color:white"><?php
                                                                        session_start();
                                                                        if (!isset($_SESSION['id']))
                                                                            header("Location:login.php");
                                                                        echo $_SESSION['name'] ?></li>

            </ul>
        </div>
    </nav>
    <br><br> <br> <br><br> <br>

    <!-- table -->
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="appliedartists-table">
                        <thead>
                            <tr>
                                <th>Q. Num</th>
                                <th style="margin-right: 100px;">Question Text</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="../../Views/report.php" method="POST">

                                <?php
                                $questions = mysqli_query($connect, "select * from Question where quiz_id=" . $_GET['id']);
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($questions)) {
                                    $i += +1;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>

                                            <h2 style="color:#1abc9c"><?php echo $row['text']; ?></h2>
                                            <input type="hidden" name="quiz_id" value="<?php echo $_GET['id']?>">
                                            <?php
                                            $answers = mysqli_query($connect, "select * from Answer where question_id=" . $row['id']);
                                            while ($ans = mysqli_fetch_assoc($answers)) {
                                                if ($ans['is_correct'] == 1) {
                                                } else {
                                                }
                                            ?>

                                                <div class="container">
                                                    <div class="radio" id="<?php echo $row['id']; ?>">
                                                        <label for="<?php echo $ans['id'] ?>">
                                                            <input type="radio" require id="<?php echo $ans['id'] ?>" name="<?php echo $row['id']; ?>" value="<?php echo $ans['id']; ?>">
                                                            <?php echo $ans['text']; ?> </label>
                                                        <br>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </td>
                                    </tr>
                                <?php  } ?>
                                <input type="submit"  class="btn btn-primary" style="color:white">
                            </form>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</body>