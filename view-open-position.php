<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Open Positions:</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php'; ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <!-- View for Open Job Position -->
                  <h2>Open Positions:</h2>
  <p>Currently Open Position:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Job Title</th>
        <th>Job Description</th>
        <th>Job Requirements</th>
        <th>Salary Range</th>
        <th>Location</th>
        <th>Job Category</th>
        <th>Posted Date</th>
        <th>Expiry Date</th>
        <th>Job Type</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php
        include'db.php';
        $selectQuery = "SELECT * FROM jobpositions";
        $query= mysqli_query($con,$selectQuery);
        while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['job_title']; ?></td>
                <td><?php echo $row['job_description'];?></td>
                <td><?php echo $row['job_requirements'];?></td>
                <td><?php echo $row['job_salary_range'];?></td>
                <td><?php echo $row['job_location'];?></td>
                <td><?php echo $row['job_position_category'];?></td>
                <td><?php echo $row['job_posted_date'];?></td>
                <td><?php echo $row['job_expiry_date'];?></td>
                <td><?php echo $row['job_type'];?></td>
                <td>
                <a  href="update-open-position.php?id=<?php echo $row['id']?>" class="btn btn-lg btn-success">Edit</a>
                </td>
                <td>
                <a href="delete-open-position.php?id=<?php echo $row['id']?>" class="btn btn-lg btn-danger">Delete</a>
                </td>
                
            </tr>
            <?php

        }

?>

    </tbody>
  </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>