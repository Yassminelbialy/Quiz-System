<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
        <meta charset="UTF-8">
        <title>Edmodo</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

        <!-- iCheck -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

        <!-- Ionicons -->
       
        <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
        <link rel="stylesheet" href="../../assets/css/admin.css">
    </head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>Admin Dashboard </b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            </a>

                            <!-- Menu Footer-->
                        </li>
                        <li class="user-footer">

                            <div class="pull-right">
                                <a href="../login.php" class="btn btn-default btn-flat log-out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="../login.php" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="vzetmIWqGcB6tmNRWxdtXtlKN1bI9WQOCcmgILx4"> </form>
                            </div>
                        </li>
                        <!-- </ul> -->

                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" id="sidebar-wrapper">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu tree" data-widget="tree">
                    <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
                    <link rel="stylesheet" href="css/admin/font.css">
                    <style>
                        a {
                            font-weight: bold;
                        }

                        body {
                            font-family: 'Open Sans';
                            font-size: 16px;

                        }
                    </style>
                    <br>
                    <li class="active">
                        <a href="http://localhost:8000/admin"><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a>
                    </li>
                    <br>
                    <li class="">
                        <a href="allStudents.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                            <span>All Students</span></a>
                    </li>
                    <br> <br>
                    <li class="">
                        <a href="allQuizzes.php"><i class="fa fa-plus" aria-hidden="true"></i>
                            <span>New Quiz</span></a>
                    </li>

                    <li class="">
                        <a href="allQuizzes.php"><i class="fa fa-comments-o" aria-hidden="true"></i>
                            <span>All Quizzes</span></a>
                    </li>
                   
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside> <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 844px;">

            <link rel="stylesheet" href="css/admin/index.css">

            <div class="container">
              
                <br> <br><br> <br>

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="/artists">
                            <div class="card" style="margin: 0 auto;">
                                <i class="fa fa-user" aria-hidden="true"></i>

                                <div class="card-body">
                                    <p> Students <span>1</span> </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <a href="/palettes">
                            <div class="card">
                                <!-- <img class="card-img-top" src="images/art.png"> -->
                                <i class="fas fa-pencil-alt"aria-hidden="true"></i>
                                <div class="card-body">
                                    <p> Quizzes <span>1</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2020 <a href="#">Yassmin Atif</a>.</strong> All rights reserved.
        </footer>

    </div>

    <!-- jQuery 3.1.1 -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
    <!-- AdminLTE App -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    <script>
        $('.content-header').append(`<div style="clear:both;"></div>`);
    </script> -->


</body>

</html>