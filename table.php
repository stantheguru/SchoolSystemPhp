

<br/>
<?php
if(isset($_POST['go'])){
	$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$admnumber=$conn->real_escape_string($_POST['adm_p']);


$sql="select * from pupils_details where Admission_Number='$admnumber'" ;
$sqli="select * from upper_school_marks where Admission_Number='$admnumber'";
$result=mysqli_query($conn,$sql);
}
?>
<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Term One</th>
      <th scope="col">Term Two</th>
      <th scope="col">Term Three</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th scope="row">English</th>
      
      <td><?php echo $row['Term_Avg1']; ?></td>
       <td><?php echo $row['Term_Avg2']; ?></td>
        <td><?php echo $row['Term_Avg3']; ?></td>
     
    </tr>
    <tr>
      <th scope="row">Kiswahili</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Mathematics</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

          
      