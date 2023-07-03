<?php
include 'db.php';
$id = $_GET['id'];

$deleteQuery = "DELETE FROM jobapplicants WHERE id=$id";
$deletequeryRun = mysqli_query($con, $deleteQuery);
if ($deletequeryRun) {
    header("Location:view-applicants.php");
    ?>
    <script>
        alert("Job applicant deleted Successfully");
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Job Applicant Not Deleted Try Again")
    </script>
    <?php
}

?>