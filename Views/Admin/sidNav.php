<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        nav {
            background-color: #2c3e50;
            height: 80px;
        }
    </style>
</head>

<body>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
        <a class="navbar-brand" href="admin.php">Edmodo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="allStudents.php"> Students
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="allQuizzes.php"> Quizzes
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="studentsGrades.php"> Students' Grades
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar dropdown">
                    <a href="../login.php" class="navbar-brand"><?php ?>Log out</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>