<!DOCTYPE html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="../assets/css/styles.css" rel="stylesheet" />

    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <?php
    session_start();
    // session_destroy();
    ?>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger">Emodo</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title"><strong>Edmodo</strong></h1>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                    <form class="form-signin" action="../Controllers/loginController.php" method="POST">
                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in</button>

                    </form>
                </div>
                <a href="register.php" class="text-center new-account"><h3>Create an account</h3> </a>
            </div>
        </div>
    </div>
</body>