<?php 
    require("../config/db_connect.php");
    require("emp_session.php");
?>

<html>
 <?php 
    include ("logged_emp_header.php"); 
    
 ?>

<div class="center">
    <a href="emps_appointments.php?id=<?php echo $this_user_id?>" class="waves-effect waves-light btn-large">View Appointments</a>
</div>

<div class="center">
    <a href="emps_vacations.php?id=<?php echo $this_user_id?>" class="waves-effect waves-light btn-large">View Vacations</a>
</div>

<div class="center">
    <a href="emp_view_performance.php" class="waves-effect waves-light btn-large">View Performance Reviews</a>
</div>

<div class="center">
    <a href="make_appointment.php?id=<?php echo $this_user_id?>" class="waves-effect waves-light btn-large">Create Appointment</a>
</div>

<div class="center">
    <a href="make_vacation.php?id=<?php echo $this_user_id?> " class="waves-effect waves-light btn-large">Create Vacation</a>
</div>

<?php include ("../templates/footer.php") ; ?>
</html>
