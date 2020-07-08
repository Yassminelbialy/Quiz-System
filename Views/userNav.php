<head>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <?php
    require_once("../Models/dbConnection.php");
    ?>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger">Emodo</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1" style="color:white">
                    <?php
                    session_start();
                    if (!isset($_SESSION['id']))
                        header("Location:login.php");
                    echo $_SESSION['name'] ?></li>

            </ul>
        </div>
    </nav>
    <br><br> <br> <br><br> <br>