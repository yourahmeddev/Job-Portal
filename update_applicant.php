<?php
include 'db.php';
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $jobapplicationStatus=$_POST['job_application_status'];
    $updateQuery = "UPDATE jobapplicants SET job_application_status = '$jobapplicationStatus' WHERE id = $id";
    $updatequeryRun = mysqli_query($con,$updateQuery );
    if($updateQuery){
      ?>
      <script>
        alert("Job Application status Changed Successfully");
      </script>
      <?php
    }else{
      ?>
      <script>
        alert("Job Application Status Not Changed");
      </script>
      <?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Attractive Bootstrap Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 50px;
    }
    .custom-select {
      background-color: #f8f9fa;
      color: #495057;
      border-color: #ced4da;
    }
  </style>
</head>
<body>
  <div class="container shadow-lg p-4 mb-4 bg-white">
    <h2>Update Job Application Status </h2>
    <form method="post">
        <div class="form-group">
          <label for="selectColor">Select a Status:</label>
          <select class="custom-select" id="selectColor" name="job_application_status">
            <option selected>Choose...</option>
            <option value="notviewed">Not Viewed</option>
            <option value="viewed">Viewed</option>
            <option value="stillinreview">Still in Review</option>
            <option value="rejected">Rejected</option>
            <option value="hired">Hired</option>
          </select>
          <input class="btn btn-primary mt-5 btn-block pt-3 pb-3 fs-1" name="submit" type="submit" value="Update Job Application Status">
    </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
