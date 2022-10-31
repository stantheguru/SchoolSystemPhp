<?php

   
    
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$search_query="select * from teacher_login where Teacher_Code='TSC001'";
$search_result=mysqli_query($conn, $search_query);
$count=mysqli_num_rows($search_result);

  while($row=mysqli_fetch_array($search_result))
    {
      
$first=$row['First_Name'];
$last=$row['Last_Name'];
 
 ?>
 <form method="post" action="ex.php">

  <?php echo "$first"; ?>

<?php
}

?>
</form>
