<?php

if(!isset($_SESSION))
{
  session_start();
}

  if(!isset($_SESSION['Username']))
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
    <link rel="stylesheet" href="css/tpage.css">
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
  <body onload="ld()">

    <header>
      <a href="home.php" class="logo" data-scroll>SCHOOL MANAGEMENT SYSTEM</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a href="home.php" data-scroll>Home</a></li>
          <li class="menu-item"><a href="#about" data-scroll>About</a></li>
          <li class="menu-item"><a href="marks_analysis.php" data-scroll>Marks Analysis</a></li>
          <li class="menu-item"><a href="#blog" data-scroll>Blog</a></li>
          <?php

if(!isset($_SESSION['Username']))
{
  
?>
<?php   echo '<li class="menu-item"><a href="home.php">Login</a></li>'

?>
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
      <li class="active"><a data-toggle="tab" href="#pupil_reg">Pupil Registration</a></li>
    <li><a data-toggle="tab" href="#entry">Marks Entry</a></li>
      <li><a data-toggle="tab" href="#promotion">Pupil Promotion</a></li>
      
    </ul>

    <div class="tab-content">
      <div id="pupil_reg" class="tab-pane fade in active">
         <div class="">
    <div class="col-lg-5 m-auto ">
      <div class="card mt-3 ">
        <div class="card-body">
          <form method="post" action="teachers_page.php">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">First Name</i>
                </span><input type="text" name="fname" class="form-control py-4" placeholder="First Name" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Last Name</i>
                </span><input type="text" name="lname" class="form-control py-4" placeholder="Last Name" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Adm No...</i>
                </span><input type="number" name="adm" class="form-control py-4" placeholder="Admission Number" required>
              </div>
            </div>
<br/>
<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Gender.....</i>
                </span>
                <select class="form-control" name="sex">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
            <br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">D. O. B....</i>
                </span><input type="date" name="dob" class="form-control py-4" placeholder="Date of Birth" required>
              </div>
            </div>
            <br/>
<div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Class........</i>
                </span>
                <select class="form-control" name="class">
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
<h5><b>Insert Parents's Details....</b></h5>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Name.......</i>
                </span><input type="text" name="pname" class="form-control py-4" placeholder="Parent's Name" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">ID............</i>
                </span><input type="number" name="ID" class="form-control py-4" placeholder="ID Number" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Phone......</i>
                </span><input type="number" name="phone" class="form-control py-4" placeholder="Parent's Phone Number" required>
              </div>
            </div>
            
            <input name="register" value="Register" id="regbtn" class="btn btn-success" type="submit"/>
            
<?php
if(isset($_POST['register']) && ($_POST['class']=="ONE" || $_POST['class']=="TWO" || $_POST['class']=="THREE")){
  $message1="Pupil Registered Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$admn=$_POST['adm'];
$gender=$_POST['sex'];
$do=$_POST['dob'];
$cls=$_POST['class'];
$p_name=$_POST['pname'];
$id=$_POST['ID'];
$tele=$_POST['phone'];
$doa=date("Y/m/d");

$sql="insert into pupils_details(First_Name,Last_Name, Admission_Number, Gender,Date_of_Birth,Class,Parents_Guardians_Name,Parents_Guardians_Phone,Parents_ID,Date_of_Admission) values ('$f_name','$l_name','$admn','$gender','$do','$cls','$p_name','$id','$tele','$doa')" ;
$sqll="insert into lower_school_marks(Class,Admission_Number,First_Name,Last_Name) values ('$cls','$admn','$f_name','$l_name')";
$sqlp="insert into progress(Admission_Number) values ('$admn')";
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sqlp) && mysqli_query($conn, $sqll)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}
}
?>
<!--upper-->
<?php
if(isset($_POST['register']) && ($_POST['class']=="FOUR" || $_POST['class']=="FIVE" || $_POST['class']=="SIX" || $_POST['class']=="SEVEN" || $_POST['class']=="EIGHT")){
  $message1="Pupil Registered Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$admn=$_POST['adm'];
$gender=$_POST['sex'];
$do=$_POST['dob'];
$cls=$_POST['class'];
$p_name=$_POST['pname'];
$id=$_POST['ID'];
$tele=$_POST['phone'];
$doa=date("Y/m/d");

$sql="insert into pupils_details(First_Name,Last_Name, Admission_Number, Gender,Date_of_Birth,Class,Parents_Guardians_Name,Parents_Guardians_Phone,Parents_ID,Date_of_Admission) values ('$f_name','$l_name','$admn','$gender','$do','$cls','$p_name','$id','$tele','$doa')" ;
$sqll="insert into upper_school_marks(Class,Admission_Number,First_Name,Last_Name) values ('$cls','$admn','$f_name','$l_name')";
$sqlp="insert into progress(Admission_Number) values ('$admn')";
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sqlp) && mysqli_query($conn, $sqll)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}
}
?>

<?php
$tsc=$_SESSION['Teacher_Code'];
$con=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$subs="select * from upper_school_teachers where Teacher_Code='$tsc'";
$result=mysqli_query($con,$subs);
if(mysqli_num_rows($result)==1){

while($r=mysqli_fetch_array($result)){
  $sub1=$r['Subject_1'];
  $sub2=$r['Subject_2'];
  $sub3=$r['Subject_3'];
  $sub4=$r['Subject_2'];
  $sub5=$r['Subject_5'];
  

?>

          </form>
      </div>
      </div>
    </div>
  </div>

       </div>



    <!-- Marks entry -->
   
      <div id="entry" class="tab-pane fade">

         <div class="">

    <div class="col-lg-5 m-auto ">

      <div class="card mt-3 ">
        <div class="card-body">
         
          <form method="post" action="teachers_page.php">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Class......</i>
                </span>
                <select class="form-control" name="class">
                  <option>Select</option>
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
                  <i class="fa fa-name fa-2x">Term......</i>
                </span>
                <select class="form-control" name="term">
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
                  <i class="fa fa-name fa-2x">Exam.....</i>
                </span>
                <select class="form-control" name="examtype">
                  <option>Opener Exam</option>
                  <option>Mid Term Exam</option>
                  <option>End Term Exam</option>
               
                </select>
              </div>
            </div>
            <br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Subject...</i>
                </span>
                <select class="form-control" name="subject" id="selecta" onchange="changeDropdown(this.value);">
                  <option>Select</option>
                  <option value="<?php echo $r["Subject_1"]; ?>"><?php echo $r["Subject_1"]; ?></option>
                  <option value="<?php echo $r["Subject_2"]; ?>"><?php echo $r["Subject_2"]; ?></option>
                  <option value="<?php echo $r["Subject_3"]; ?>"><?php echo $r["Subject_3"]; ?></option>
                  <option value="<?php echo $r["Subject_4"]; ?>"><?php echo $r["Subject_4"]; ?></option>
                  <option value="<?php echo $r["Subject_5"]; ?>"><?php echo $r["Subject_5"]; ?></option>
                <?php
                }
}
?>
                </select>
              </div>
            </div>
            <br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Adm No.</i>
                </span><input type="number" name="admno" class="form-control py-4" placeholder="Admission Number" required>
              </div>
            </div>
<br/>
 <h5><b>Score = 'Raw Marks'.</b></h5>
         <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x" id="subname" value="Grammar">Grammar</i>
                </span><input type="number" name="score" class="form-control py-4" placeholder="Score...." required>
              </div>
            </div>
			
			<br/>
 
         <div class="input-group mb-3" id="compo">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x" id="subscore">Comp.....</i>
                </span><input type="number" id="cmp" name="score1" class="form-control py-4" placeholder="Score...." required>
              </div>
            </div>
  
          
            
            <input name="save" value="Save" id="savebtn" class="btn btn-success" type="submit"/>
            
			
    <!--save lower 6-->
<?php

if(isset($_POST['save']) && ($_POST['class']=="ONE" || $_POST['class']=="TWO" || $_POST['class']=="THREE") && (substr($_POST['subject'],0,3)=="MAT" ||substr($_POST['subject'],0,3)=="ENG" ||substr($_POST['subject'],0,3)=="KIS" ||substr($_POST['subject'],0,3)=="REA" ||substr($_POST['subject'],0,3)=="KUS" ||substr($_POST['subject'],0,3)=="HYG")){
  $message1="Marks Saved Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$tr=$_POST['term'];
$exam=$_POST['examtype'];
$exa=substr($exam,0,1);
$sub=$_POST['subject'];
$subj=substr($sub,0,3);
$sb=$subj."_".$exa.$tr;


$mark=$_POST['score'];

$scr=$mark*2;
$admn=$_POST['admno'];

$sqlu="update lower_school_marks set $sb='$scr' where Admission_Number='$admn'";


if(mysqli_query($conn, $sqlu)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}

}
?>
<!--save lower env-->
<?php

if(isset($_POST['save']) && ($_POST['class']=="ONE" || $_POST['class']=="TWO" || $_POST['class']=="THREE") && (substr($_POST['subject'],0,7)=="ENV_CRE")){
  $message1="Marks Saved Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$tr=$_POST['term'];
$exam=$_POST['examtype'];
$exa=substr($exam,0,1);
$sub=$_POST['subject'];
$subj=substr($sub,0,7);
$sb=$subj."_".$exa.$tr;


$mark=$_POST['score'];

$scr=$mark*2;
$admn=$_POST['admno'];

$sqlu="update lower_school_marks set $sb='$scr' where Admission_Number='$admn'";


if(mysqli_query($conn, $sqlu)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}

}
?>

      <!--save mat sci-->
<?php

if(isset($_POST['save']) && ($_POST['class']=="FOUR" || $_POST['class']=="FIVE" || $_POST['class']=="SIX" || $_POST['class']=="SEVEN" || $_POST['class']=="EIGHT") && (substr($_POST['subject'],0,3)=="MAT" ||substr($_POST['subject'],0,3)=="SCI")){
  $message1="Marks Saved Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$tr=$_POST['term'];
$exam=$_POST['examtype'];
$exa=substr($exam,0,1);
$sub=$_POST['subject'];
$subj=substr($sub,0,3);
$sb=$subj."_".$exa.$tr;


$mark=$_POST['score'];

$scr=$mark*2;
$admn=$_POST['admno'];

$sqlu="update upper_school_marks set $sb='$scr' where Admission_Number='$admn'";
$sqlp="update upper_school_marks set Total_O1=ENG_O1+KIS_O1+MAT_O1+SST_CRE_O1+SCI_O1 where Admission_Number='$admn'";

if(mysqli_query($conn, $sqlu) && mysqli_query($conn, $sqlp)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}

}
?>

<!--save kis eng-->
<?php

if(isset($_POST['save']) && ($_POST['class']=="FOUR" || $_POST['class']=="FIVE" || $_POST['class']=="SIX" || $_POST['class']=="SEVEN" || $_POST['class']=="EIGHT") && (substr($_POST['subject'],0,3)=="ENG" ||substr($_POST['subject'],0,3)=="KIS")){
  $message1="Marks Saved Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$tr=$_POST['term'];
$exam=$_POST['examtype'];
$exa=substr($exam,0,1);
$sub=$_POST['subject'];
$subj=substr($sub,0,3);
$sb=$subj."_".$exa.$tr;
echo $sb;

$mark=$_POST['score'];
$mark1=$_POST['score1'];
$con_mark=$mark*1.2;
$scr=$con_mark+$mark1;
$admn=$_POST['admno'];

$sqlu="update upper_school_marks set $sb='$scr' where Admission_Number='$admn'";
$sqlp="update upper_school_marks set Total_O1=ENG_O1+KIS_O1+MAT_O1+SST_CRE_O1+SCI_O1 where Admission_Number='$admn'";

if(mysqli_query($conn, $sqlu) && mysqli_query($conn, $sqlp)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}

}
?>

<!--save sst-->
<?php

if(isset($_POST['save']) && ($_POST['class']=="FOUR" || $_POST['class']=="FIVE" || $_POST['class']=="SIX" || $_POST['class']=="SEVEN" || $_POST['class']=="EIGHT") && (substr($_POST['subject'],0,7)=="SST_CRE")){
  $message1="Marks Saved Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$tr=$_POST['term'];
$exam=$_POST['examtype'];
$exa=substr($exam,0,1);
$sub=$_POST['subject'];
$subj=substr($sub,0,7);
$sb=$subj."_".$exa.$tr;


$mark=$_POST['score'];

$con_mark=$mark*100;
$scr=$con_mark/90;
$admn=$_POST['admno'];

$sqlu="update upper_school_marks set $sb='$scr' where Admission_Number='$admn'";
$sqlp="update upper_school_marks set Total_O1=ENG_O1+KIS_O1+MAT_O1+SST_CRE_O1+SCI_O1 where Admission_Number='$admn'";

if(mysqli_query($conn, $sqlu) && mysqli_query($conn, $sqlp)){

 ?>
 <br/>
 <?php echo $message1;

}else{
  ?>
  <br/>
 <?php echo $message2;
}

}
?>
<!--Display-->


          </form>
      </div>
      </div>
    </div>
  </div>
      </div>

<div id="promotion" class="tab-pane fade">
        <h3>RUBY</h3>
        <p>Be Serious Please. Stansoft CEO</p>
      </div>

    </div>
  </div>
  </body>

  <script>
    function ld(){
     $("select option[value='']").remove(); 
    }
    
function changeDropdown(){

	var state=document.getElementById("selecta").value;
	
	if(state=="ENG CLASS FOUR" || state=="ENG CLASS FIVE" ||state=="ENG CLASS SIX" ||state=="ENG CLASS SEVEN" ||state=="ENG CLASS EIGHT"){
    $('#subname').text('Grammar');
    $('#subscore').text('Comp.....');

		document.getElementById("compo").style.visibility='visible'; 
	document.getElementById("cmp").value='';
	}else if(state=="KIS CLASS FOUR" ||state=="KIS CLASS FIVE" ||state=="KIS CLASS SIX" ||state=="KIS CLASS SEVEN" ||state=="KIS CLASS EIGHT"){
    $('#subname').text('Lugha....');
$('#subscore').text("Insha......");
    document.getElementById("compo").style.visibility='visible'; 
  document.getElementById("cmp").value='';
  }else{
    document.getElementById("compo").style.visibility='hidden';
    document.getElementById("cmp").value='0';
    
    $(document).ready(function () {
        $('#subname').text("Score.....");
    });
}
}

</script>
  
</html>
