<?php
    $props=["Vacation Start" => "", "Vacatoin End" => ""];

    

?>
<html>

      <script type="text/JavaScript">
        $(document).ready(function(){
        $('.datepicker').datepicker();
      });

      </script>


    <?php include('../templates/logged_header.php'); ?>
    <section class= "container grey-text">
        <h4 class="center"> Add a user </h4>
    <form class ="white" action="login.php" method="POST">

        <label >Vacation Start: </label>
            <input type="text" class="datepicker">

        <label >Vacation End: </label>
            <input type="text" class="datepicker">

        <div class ="center"> <input type="submit" value="Create Request" > </div>
        <!- An employee ID, date_requested, and approved flag are also need to make the sql insert ->
        <br>
        </form>
    </section>


    <?php include('../templates/footer.php'); ?>
</html>