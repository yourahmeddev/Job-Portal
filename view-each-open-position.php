<!-- php code for displaying the each open job position -->
<?php
include 'db.php';
$id =$_GET['id'];
$selectQuery = "select * from jobpositions where id=$id";
$selectqueryRun = mysqli_query($con,$selectQuery);
$row = mysqli_fetch_assoc($selectqueryRun);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Open Job position Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/view-each-job-position.css">
</head>
<body>
    <div class="container">
        <h1>Open Job position Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Job Title</h5>
                <p class="card-text"><?php echo $row['job_title']; ?></p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Job Description</h5>
                <p class="card-text"><?php echo $row['job_description'];?></</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Requirements</h5>
                <p class="card-text">
                <?php echo $row['job_requirements'];?>
                </p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <ul class="card-text ">
                    <li>Salary Range:<?php echo $row['job_salary_range'];?></li>
                    <li>Job Location: <?php echo $row['job_location'];?></li>
                    <li>Job Position Category: <?php echo $row['job_position_category'];?></li>
                    <li>Job Posted Date: <?php echo $row['job_posted_date'];?></li>
                    <li>Job Exipry Date Date: <?php echo $row['job_expiry_date'];?></li>
                    <li>Job Type: <?php echo $row['job_type'];?></li>
                </ul>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h2 class="card-title">Job Application Form</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input name="full_name" type="text" class="form-control" id="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input name="phone" type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
      </div>
      
      <div class="form-group">
        <label for="resume">Upload Resume:</label>
        <input name="resume" type="file" class="form-control-file" id="resume" required name="resume">
      </div>
      <div class="form-group">
        <label for="cover-letter">Cover Letter:</label>
        <textarea name="cover-letter" class="form-control" id="cover-letter" rows="5" placeholder="Enter your cover letter"></textarea>
      </div>
      <input name="submit" type="submit" class="btn btn-primary" value="Submit Application">
    </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<!-- code for inserting new job applicants in their table of database -->
<?php
if(isset($_POST['submit'])){
    $fullName=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $resume=$_FILES['resume'];
    $coverLetter=$_POST['cover-letter'];

    $resumename = $resume['name'];
    $resumepath = $resume['tmp_name'];
    $resumeerror = $resume['error'];
    if($resumeerror == 0){
        $destresume = 'resumes/'.$resumename;
        move_uploaded_file($resumepath,$destresume);

    $insertQuery = "insert int jobapplicants (email,phone,resume,coverletter,jobposition_id,full_name) values('$email','$phone','$destresume','$coverLetter','$id','$fullName')";

    $insertqueryRun = mysqli_query($con,$insertQuery);
    
    if($insertqueryRun){
        // when applicant applying job got successful
        ?>
        <script>
            alert("You have successfully Applied for the job Our HR Team Will get back you soon");
        </script>
        <?php
    }else{
        // when applicant applying job got failed
        ?>
        <script>
            alert("Try Again apply for the job");
        </script>
        <?php
    }
    }
}

?>