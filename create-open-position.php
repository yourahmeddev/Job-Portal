<?php
session_start();
include'db.php';
if(isset($_POST['submit'])){
  $jobTitle=mysqli_real_escape_string($con,$_POST['job_title']);
  $jobDescription=mysqli_real_escape_string($con,$_POST['job_description']);
  $jobRequirements=mysqli_real_escape_string($con,$_POST['job_requirements']);
  $jobsalaryRange=mysqli_real_escape_string($con,$_POST['job_salary_range']);
  $jobLocation=mysqli_real_escape_string($con,$_POST['job_location']);
  $jobpostedCategory=mysqli_real_escape_string($con,$_POST['job_position_category']);
  $jobpostedDate=mysqli_real_escape_string($con,$_POST['job_posted_date']);
  $jobexpiryDate=mysqli_real_escape_string($con,$_POST['job_expiry_date']);
  $jobType=mysqli_real_escape_string($con,$_POST['job_type']);

  $insertQuery="INSERT INTO `jobpositions`(`job_title`, `job_description`, `job_requirements`, `job_salary_range`, `job_location`, `job_position_category`, `job_posted_date`, `job_expiry_date`, `job_type`) VALUES ('$jobTitle','$jobDescription','$jobRequirements','$jobsalaryRange','$jobLocation','$jobpostedCategory','$jobpostedDate','$jobexpiryDate','$jobType')";
  $insertquertRun = mysqli_query($con,$insertQuery);
  if($insertquertRun){
    ?>
    <script>
      alert("New Job Posted");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("Try again to create new Job Post");
    </script>
    <?php
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

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

          <!-- Code for Creating new job positions -->
          <h1>Create Job Position</h1>
          <form method="POST">
            <div class="form-group">
              <label for="title">Job Title</label>
              <input name="job_title" type="text" class="form-control" id="title" name="title" required name="job_title">
            </div>

            <div class="form-group">
              <label for="description">Job Description</label>
              <textarea name="job_description" class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
              <label for="requirements">Job Requirements</label>
              <textarea name="job_requirements" class="form-control" id="requirements" name="requirements" rows="4" required></textarea>
            </div>

            <div class="form-group">
              <label>Salary Range</label>
              <input name="job_salary_range" type="text" class="form-control" id="salary" name="salary" required>
            </div>

            <div class="form-group">
              <label >Job Location</label>
              <input name="job_location" type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
              <label >Job Position Category</label>
              <input name="job_position_category" type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
              <label >Date Posted</label>
              <input name="job_posted_date" type="date" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
              <label >Date Expiry</label>
              <input name="job_expiry_date" type="date" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
              <label for="location">Select Job Type</label>
              <select class="form-control" name="job_type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Select Job Type:</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Internship">Internship</option>
              </select>
            </div>

            <input name="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Create a New Job Position">
            <br>
            <br>
          </form>
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