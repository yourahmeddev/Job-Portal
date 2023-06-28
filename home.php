<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <div class="container mt-5 pt-4">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title text-center text-md-start">
                    <h4 class="title mb-4">Find the perfect jobs</h4>
                    <p class="text-muted mb-0 para-desc">Start your career with us. Build responsive, mobile-first
                        projects on the web with the world's most popular front-end component library.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 d-none d-md-block">
                <div class="text-center text-md-end">
                    <a href="#" class="text-primary">View more Jobs <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-arrow-right fea icon-sm">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <!-- backend code for displaying open job postion -->
            <?php 
            include 'db.php';
            $selectQuery = "select * from jobpositions";
            $selectqueryRun = mysqli_query($con,$selectQuery);
            while($row=mysqli_fetch_assoc($selectqueryRun)){
                ?>
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card border-0 bg-light rounded shadow">
                    <div class="card-body p-4">
                        <span class="text-light badge rounded-pill bg-success float-md-end mb-3 mb-sm-0"><?php echo $row['job_type'];?></span>
                        <h5><?php echo $row['job_title']; ?></h5>
                        <div class="mt-3">
                            <span class="text-muted d-block"><i class="fa fa-clock" aria-hidden="true"></i> <a href="#"
                                    target="_blank" class="text-muted"><?php echo $row['job_posted_date'];?></a></span>
                            <span class="text-muted d-block"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?php echo $row['job_location'];?></span>
                        </div>
                        <div class="mt-3">
                            <a href="view-each-open-position.php?id=<?php echo $row['id'];?>" class="btn btn-success">View Details</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
                <?php
            }

?>
            
        </div><!--end row-->
    </div>
</body>

</html>