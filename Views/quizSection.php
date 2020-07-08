<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Quizzes</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <?php
            require_once("../Models/dbConnection.php");
            $users = mysqli_query($connect, "select * from Quiz");
            $i = 0;
            while ($row = mysqli_fetch_assoc($users)) {
                $i += +1;

            ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#<?php echo $row['id'] ?>">
                        <a href="quiz.php/?id=<?php echo $row['id']; ?>">

                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <strong style="font-size: 24px;" class="img-fluid"><?php echo $row['name'] ?></strong>
                            <img class="img-fluid" src="../assets/img/portfolio/quiz.jpg" alt="" />
                    </div>
                </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>