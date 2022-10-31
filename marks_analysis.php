<?php

if(!isset($_SESSION))
{
  session_start();
}

  if(!isset($_SESSION['username'])&&!isset($_SESSION['Username']))
  {
    header("Location:home.php");
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>School Management System</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/marks_analysis.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
  </head>
  <body>

    <header>
      <a href="home.php" class="logo" data-scroll>SCHOOL MANAGEMENT SYSTEM</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a href="home.php" data-scroll>Home</a></li>
          <li class="menu-item"><a href="#about" data-scroll>About</a></li>
          
          <li class="menu-item"><a href="#blog" data-scroll>Blog</a></li>
<?php

if(!isset($_SESSION['username'])&&!isset($_SESSION['Username']))
{
  
?>
<?php   echo '<li class="menu-item"><a href="home.php">Login</a></li>'

?>
<?php
}
?>
    <?php

if(isset($_SESSION['username']))
{
?>  
        <li id="usern"> <a>Logged in as: <?=$_SESSION["username"];?></a>
        </li>
        '<li class="menu-item"><a href="logout.php">LOGOUT</a></li>'
  
<?php
} 

?>
<?php

if(isset($_SESSION['Username']))
{
?>  
        <li id="usern"> <a>Logged in as: <?=$_SESSION["Username"];?></a>
        </li>
        '<li class="menu-item"><a href="logout.php">LOGOUT</a></li>'
  
<?php
} 

?>

     
        </ul>
      </nav>
    </header>

    

    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>

    <div class="container tab">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#user_reg">Pupil Performance</a></li>
    <li><a data-toggle="tab" href="#resp">Class Performance</a></li>
      <li><a data-toggle="tab" href="#promotion">Subject Performance</a></li>
     
    </ul>

    <div class="tab-content">
      <div id="user_reg" class="tab-pane fade in active">
         
    <div class="col-lg-3 m-auto ">
      <div class="card mt-3 ">
        <div class="card-body">
          <h4>TERM ANALYSIS</h4>
          <form method="post" action="marks_analysis.php">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Period....</i>
                </span>
                <select class="form-control" name="period">
                  <option>Current</option>
                  <option>Past</option>
                </select>
              </div>
          </div>
<br/>
<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Term......</i>
                </span>
                <select class="form-control" name="trmp">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
          </div>
          <br/>
<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Class......</i>
                </span>
                <select class="form-control" name="classp">
                  <option>ONE</option>
                  <option>TWO</option>
                  <option>THREE</option>
                  <option>FOUR</option>
                  <option>FIVE</option>
                  <option>SIX</option>
                  <option>SEVEN</option>
                  <option>EIGHT</option>
                </select>
              </div>
          </div>
              <br/>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Adm No.</i>
                </span><input type="number" name="adm_p" class="form-control py-4" placeholder="Admission No." required>
              </div>
            </div>

<input name="go" value="GO" id="gobtn" class="btn btn-success" type="submit"/>

          </form>
      </div>
      </div>

    
    </div>
  

<div class="col-lg-9 m-auto ">
      <div class="card mt-3 ">
        <div class="card-body">
        	<form method="post" action="marks_analysis.php">
              


<?php
if(isset($_POST['go'])){
  $conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$admnumber=$conn->real_escape_string($_POST['adm_p']);

$sqli="select * from upper_school_marks where Admission_Number='$admnumber'";

$result=mysqli_query($conn,$sqli);
if(mysqli_num_rows($result)==1){
while($row=mysqli_fetch_array($result)){
  $term=$_POST['trmp'];
  $englishO="ENG_O".$term;
  $englishM="ENG_M".$term;
  $englishE="ENG_E".$term;

  $kiswahiliO="KIS_O".$term;
  $kiswahiliM="KIS_M".$term;
  $kiswahiliE="KIS_E".$term;

  $matheO="MAT_O".$term;
  $matheM="MAT_M".$term;
  $matheE="MAT_E".$term;

  $scienceO="SCI_O".$term;
  $scienceM="SCI_M".$term;
  $scienceE="SCI_E".$term;

  $sostO="SST_CRE_O".$term;
  $sostM="SST_CRE_M".$term;
  $sostE="SST_CRE_E".$term;

  $ranO="Rank_O".$term;
  $ranM="Rank_M".$term;
  $ranE="Rank_E".$term;
  $TrmR="Term_Rank".$term;


  $pname=$row['First_Name']."   ".$row['Last_Name'];
  $engO=$row[$englishO];
  $engM=$row[$englishM];
  $engE=$row[$englishE];
  $Eavg=($engO+$engM+$engE)/3;

  $kisO=$row[$kiswahiliO];
  $kisM=$row[$kiswahiliM];
  $kisE=$row[$kiswahiliM];
  $Kavg=($kisE+$kisM+$kisO)/3;

  $matO=$row[$matheO];
  $matM=$row[$matheM];
  $matE=$row[$matheE];
  $Mavg=($matO+$matM+$matE)/3;

  $sciO=$row[$scienceO];
  $sciM=$row[$scienceM];
  $sciE=$row[$scienceE];
  $SCavg=($sciE+$sciM+$sciO)/3;

  $sstO=$row[$sostO];
  $sstM=$row[$sostM];
  $sstE=$row[$sostE];
  $SSavg=($sstO+$sstM+$sstE)/3;

  $rankO=$row[$ranO];
  $rankM=$row[$ranM];
  $rankE=$row[$ranE];
  $TermR=$row[$TrmR];

}

?>

<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Pupil's Name</i>
                </span>
                <input type="text" value="<?php echo $pname; ?>" name="fullname" class="form-control py-4" placeholder="Full Name" readonly>


</div>
</div>
<br/>
<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">SUBJECT</th>
      <th scope="col">OPENER</th>
      <th scope="col">MID TERM</th>
      <th scope="col">END TERM</th>
      <th scope="col">TERM AVERAGE</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th scope="row">English</th>
      
      <td><?php echo $engO; ?></td>
       <td><?php echo $engM; ?></td>
        <td><?php echo $engE; ?></td>
        <td><?php echo round($Eavg,1); ?></td>
     
    </tr>
    <tr>
      <th scope="row">Kiswahili</th>
      <td><?php echo $kisO; ?></td>
       <td><?php echo $kisM; ?></td>
        <td><?php echo $kisE; ?></td>
        <td><?php echo round($Kavg,1); ?></td>
    </tr>
    <tr>
      <th scope="row">Mathematics</th>
      <td><?php echo $matO; ?></td>
       <td><?php echo $matM; ?></td>
        <td><?php echo $matE; ?></td>
        <td><?php echo round($Mavg,1); ?></td>
    </tr>

    <tr>
      <th scope="row">Science</th>
      <td><?php echo $sciO; ?></td>
       <td><?php echo $sciM; ?></td>
        <td><?php echo $sciE; ?></td>
        <td><?php echo round($SCavg,1); ?></td>
    </tr>

    <tr>
      <th scope="row">SST/CRE</th>
      <td><?php echo $sstO; ?></td>
       <td><?php echo $sstM; ?></td>
        <td><?php echo $sstE; ?></td>
        <td><?php echo round($SSavg,1); ?></td>
    </tr>

    <tr>
      <th scope="row">EXAM AVERAGE</th>
      <td><?php echo round(($sstO+$engO+$kisO+$sciO+$matO)/5,1); ?></td>
       <td><?php echo round(($sstM+$engM+$kisM+$sciM+$matM)/5,1); ?></td>
        <td><?php echo round(($sstE+$engE+$kisE+$sciE+$matE)/5,1); ?></td>
        <td><?php echo round(($Eavg+$Kavg+$Mavg+$SCavg+$SSavg)/5,1); ?></td>
    </tr>

    <tr>
      <th scope="row">RANK</th>
      <td><?php echo $rankO; ?></td>
      <td><?php echo $rankM; ?></td>
      <td><?php echo $rankE; ?></td>
      <td><?php echo $TermR; ?></td>

      
    </tr>


  </tbody>
</table>
<?php
}

}
?>
          
      

            </form>

              </div>
            </div>
</div>
 </div>
     


<!--class term perform-->
<div id="resp" class="tab-pane fade">
         
    <div class="col-lg-3 m-auto ">
      <div class="card mt-3 ">
        <div class="card-body">
          <h4>TERM ANALYSIS</h4>
          <form method="post" action="marks_analysis.php">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Period....</i>
                </span>
                <select class="form-control" name="period">
                  <option>Current</option>
                  <option>Past</option>
                </select>
              </div>
          </div>
<br/>
<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Term......</i>
                </span>
                <select class="form-control" name="trmt">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
          </div>
          <br/>
<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Class......</i>
                </span>
                <select class="form-control" name="classt">
                  <option>ONE</option>
                  <option>TWO</option>
                  <option>THREE</option>
                  <option>FOUR</option>
                  <option>FIVE</option>
                  <option>SIX</option>
                  <option>SEVEN</option>
                  <option>EIGHT</option>
                </select>
              </div>
          </div>
              

<input name="goclass" value="GO" id="gobtn" class="btn btn-success" type="submit" />

          </form>
      </div>
    </div>
  </div>


<div class="col-lg-9 m-auto ">
      <div class="card mt-3 ">
        <div class="card-body">
          <form method="post" action="marks_analysis.php">
              


<table class="table table-bordered">
  <thead>
    <tr>
      
      <th scope="col">NAME</th>
      <th scope="col">ENGLISH</th>
      <th scope="col">KISWAHILI</th>
      <th scope="col">MATHEMATICS</th>
      <th scope="col">SCIENCE</th>
      <th scope="col">SST/CRE</th>
      <th scope="col">TERM_AVERAGE</th>
      <th scope="col">RANK</th>
    </tr>
  </thead>
<?php
if(isset($_POST['goclass'])){
  $conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$cls=$_POST['classt'];
$term=$_POST['trmt'];
$trmavg='Term_Avg'.$term;
$sq="select * from upper_school_marks where Class='$cls' ORDER BY $trmavg DESC";

$result=mysqli_query($conn,$sq);
if($result-> num_rows>1){
while($row=$result-> fetch_assoc()){
  
  $englishO="ENG_O".$term; $englishM="ENG_M".$term; $englishE="ENG_E".$term;
  
  $kiswahiliO="KIS_O".$term; $kiswahiliM="KIS_M".$term; $kiswahiliE="KIS_E".$term;
  
  $matheO="MAT_O".$term; $matheM="MAT_M".$term; $matheE="MAT_E".$term;
  
  $scienceO="SCI_O".$term; $scienceM="SCI_M".$term; $scienceE="SCI_E".$term;
  

  $sostO="SST_CRE_O".$term; $sostM="SST_CRE_M".$term; $sostE="SST_CRE_E".$term;
  
  $trmr="Term_Rank".$term;
  $termavg="Term_Avg".$term;


  $pname=$row['First_Name']."   ".$row['Last_Name'];
  $engO=round(($row[$englishO]+$row[$englishM]+$row[$englishE])/3,1);
  
  $kisO=round(($row[$kiswahiliO]+$row[$kiswahiliM]+$row[$kiswahiliE])/3,1);

  $matO=round(($row[$matheO]+$row[$matheM]+$row[$matheE])/3,1);

  $sciO=round(($row[$scienceO]+$row[$scienceM]+$row[$scienceE])/3,1);

  $sstO=round(($row[$sostO]+$row[$sostM]+$row[$sostE])/3,1);
  

  $TermRank=$row[$trmr];
  $TermAvg=$row[$termavg];



?>





  <tbody>
    <tr>

      <th scope="row"><?php echo $pname; ?></th>
      
      <td><?php echo $engO; ?></td>
       <td><?php echo $kisO; ?></td>
        <td><?php echo $matO; ?></td>
        <td><?php echo $sciO; ?></td>
        <td><?php echo $sstO; ?></td>
        <td><?php echo $TermAvg; ?></td>
        <td><?php echo $TermRank ?></td>
     
    </tr>
    <?php
  }
  ?>
  


<tr>
<th scope="row">AVERAGE</th>

</tr>
  </tbody>
</table>

<?php

}
}
?>
</form>
</div>





      </div>
    </div>
  </div>
<!--subject analysis-->


<div id="promotion" class="tab-pane fade">
        <h3>RUBY</h3>
        <p>Be Serious Please. Stansoft CEO</p>
      </div>

    </div>
  </div>
  </body>

</html>
