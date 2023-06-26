<?php 
include'db.php';
$id = $_GET['id'];
$deleteQuery = "DELETE FROM jobpositions WHERE id=$id";
$deletequeryRun = mysqli_query($con,$deleteQuery);
if($deletequeryRun){
    header("Location:view-open-position.php");
    ?>
    <script>
        alert("Job Post Deleted Successfully");
    </script>
    <?php
}else{
    ?>
<script>
    alert("Try Again Job Post Delete Got Failed");
</script>
    <?php
}


?>