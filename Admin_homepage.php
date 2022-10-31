<?php

if(!isset($_SESSION))
{
  session_start();
}

  if(!isset($_SESSION['username']))
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
    <link rel="stylesheet" href="css/admin.css">
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
          <li class="menu-item"><a href="marks_analysis.php" data-scroll>Marks Analysis</a></li>
          <li class="menu-item"><a href="#blog" data-scroll>Blog</a></li>
<?php

if(!isset($_SESSION['username']))
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

     
        </ul>
      </nav>
    </header>

    

    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>

    <div class="container tab">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#user_reg">User Registration</a></li>
    <li><a data-toggle="tab" href="#resp">Teacher Responsibilities</a></li>
      <li><a data-toggle="tab" href="#promotion">Pupil Promotion</a></li>
      
    </ul>

    <div class="tab-content">
      <div id="user_reg" class="tab-pane fade in active">
         <div class="">
    <div class="col-lg-5 m-auto ">
      <div class="card mt-3 ">
        <div class="card-body">
          <form method="post" action="Admin_homepage.php">
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
                  <i class="fa fa-name fa-2x">Emp Code</i>
                </span><input type="text" name="empcode" class="form-control py-4" placeholder="Employee Code" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Phone No.</i>
                </span><input type="number" name="phone" class="form-control py-4" placeholder="Phone Number" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">ID  No.......</i>
                </span><input type="number" name="ID" class="form-control py-4" placeholder="ID Number" required>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Email.......</i>
                </span><input type="email" name="email" class="form-control py-4" placeholder="Email Address" required>
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
            <div class="input-group id="rht" mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Role.........</i>
                </span>
                <select class="form-control" name="role">
                  <option>Class_Teacher</option>
                  <option>Head_Teacher</option>
                  <option>Deputy_Head Teacher</option>
                  <option>Normal_Teacher</option>
                  <option>Exam_Coordinator</option>
                </select>
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
            <input name="register" value="Register" id="regbtn" class="btn btn-success" type="submit"/>
            
<?php
if(isset($_POST['register']) && $_POST['role']=="Class_Teacher"){
  $message1="User Registered Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");

$code=$_POST['empcode'];
$First_Name=$_POST['fname'];
$Last_Name=$_POST['lname'];
$Phone_Number=$_POST['phone'];
$Email=$_POST['email'];
$Id=$_POST['ID'];
$Gender=$_POST['sex'];
$rle=$_POST['role'];
$cls=$_POST['class'];
$respo=$rle."_".$cls;
$tname=$First_Name." ".$Last_Name;

$sql="insert into teacher_login(Teacher_Code, First_Name, Last_Name,Phone_Number,ID,Username,Gender,Level) values ('$code','$First_Name','$Last_Name','$Phone_Number','$Id','$Email','$Gender','$respo')" ;
$sqlc="insert into class_teachers (Class,Teacher_Code,Teachers_Name) values ('$cls','$code','$tname')";
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sqlc)){

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
<!--head dep cood-->
<?php
if(isset($_POST['register']) && ($_POST['role']=="Head_Teacher" ||$_POST['role']=="Deputy_Head_Teacher" ||$_POST['role']=="Exam_Coordinator")){
  $message1="User Registered Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");

$code=$_POST['empcode'];
$First_Name=$_POST['fname'];
$Last_Name=$_POST['lname'];
$Phone_Number=$_POST['phone'];
$Email=$_POST['email'];
$Id=$_POST['ID'];
$Gender=$_POST['sex'];
$rle=$_POST['role'];


$sql="insert into teacher_login(Teacher_Code, First_Name, Last_Name,Phone_Number,ID,Username,Gender,Level) values ('$code','$First_Name','$Last_Name','$Phone_Number','$Id','$Email','$Gender','$rle')" ;
if(mysqli_query($conn, $sql)){

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
<!--normal-->
<?php

  
    if(isset($_POST['register'])){
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$search_query="SELECT MAX(SUBSTRING(Level,15)) as 'num' from teacher_login where Level LIKE  'N%'";
$search_result=mysqli_query($conn, $search_query);
$count=mysqli_num_rows($search_result);
  while($row=mysqli_fetch_array($search_result)){     
$ct=$row['num'];}}
?>

<?php
if(isset($_POST['register']) && $_POST['role']=="Normal_Teacher"){
  $message1="User Registered Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$code=$_POST['empcode'];
$First_Name=$_POST['fname'];
$Last_Name=$_POST['lname'];
$Phone_Number=$_POST['phone'];
$Email=$_POST['email'];
$Id=$_POST['ID'];
$Gender=$_POST['sex'];
$rle=$_POST['role'];
$number=1+$ct;
$rln=$rle.$number;
$sql="insert into teacher_login(Teacher_Code, First_Name, Last_Name,Phone_Number,ID,Username,Gender,Level) values ('$code','$First_Name','$Last_Name','$Phone_Number','$Id','$Email','$Gender','$rln')" ;
if(mysqli_query($conn, $sql)){

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

          </form>
      </div>
      </div>
    </div>
  </div>

       </div>



    <!-- Subject Allocation -->
   
      <div id="resp" class="tab-pane fade">

         <div class="">

    <div class="col-lg-5 m-auto ">

      <div class="card mt-3 ">
        <div class="card-body">
         
          <form method="post" action="Admin_homepage.php">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Emp Code</i>
                </span><input type="text" name="tc_code" class="form-control py-4" placeholder="Employee Code" required>
              </div>
            </div>
<br/>
 <h4>Please Select Subjects....</h4>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">English....</i>
                </span>
                <select class="form-control" name="eng">
                  <option></option>
                  <option>ENG CLASS ONE</option>
                  <option>ENG CLASS TWO</option>
                  <option>ENG CLASS THREE</option>
                  <option>ENG CLASS FOUR</option>
                  <option>ENG CLASS FIVE</option>
                  <option>ENG CLASS SIX</option>
                  <option>ENG CLASS SEVEN</option>
                  <option>ENG CLASS EIGHT</option>
                
                </select>
              </div>
            </div>
            <br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Kiswahili.</i>
                </span>
                <select class="form-control" name="kis">
                  <option></option>
                  <option>KIS CLASS ONE</option>
                  <option>KIS CLASS TWO</option>
                  <option>KIS CLASS THREE</option>
                  <option>KIS CLASS FOUR</option>
                  <option>KIS CLASS FIVE</option>
                  <option>KIS CLASS SIX</option>
                  <option>KIS CLASS SEVEN</option>
                  <option>KIS CLASS EIGHT</option>
                
                </select>
              </div>
            </div>
            <br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Maths......</i>
                </span>
                <select class="form-control" name="math">
                  <option></option>
                  <option>MAT CLASS ONE</option>
                  <option>MAT CLASS TWO</option>
                  <option>MAT CLASS THREE</option>
                  <option>MAT CLASS FOUR</option>
                  <option>MAT CLASS FIVE</option>
                  <option>MAT CLASS SIX</option>
                  <option>MAT CLASS SEVEN</option>
                  <option>MAT CLASS EIGHT</option>
                
                </select>
              </div>
            </div>
<br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">SST/CRE</i>
                </span>
                <select class="form-control" name="sst">
                  <option></option>
                  <option>SST CLASS ONE</option>
                  <option>SST CLASS TWO</option>
                  <option>SST CLASS THREE</option>
                  <option>SST CLASS FOUR</option>
                  <option>SST CLASS FIVE</option>
                  <option>SST CLASS SIX</option>
                  <option>SST CLASS SEVEN</option>
                  <option>SST CLASS EIGHT</option>
                
                </select>
              </div>
            </div>
            <br/>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-name fa-2x">Science...</i>
                </span>
                <select class="form-control" name="sci">
                  <option></option>
                  <option>SCI CLASS ONE</option>
                  <option>SCI CLASS TWO</option>
                  <option>SCI CLASS THREE</option>
                  <option>SCI CLASS FOUR</option>
                  <option>SCI CLASS FIVE</option>
                  <option>SCI CLASS SIX</option>
                  <option>SCI CLASS SEVEN</option>
                  <option>SCI CLASS EIGHT</option>
                
                </select>
              </div>
            </div>
          
            
            <input name="subbtn" value="Submit" id="regbtn" class="btn btn-success" type="submit"/>
            
<?php
if(isset($_POST['subbtn'])){
  $message1="Subjects Allocated Successfully!";
  $message2='An Error Occurred. Please Try Again!!!';
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");

$tr_code=$_POST['tc_code'];
$Eng=$_POST['eng'];
$Kis=$_POST['kis'];
$Mat=$_POST['math'];
$SST=$_POST['sst'];
$SCI=$_POST['sci'];


$sql="insert into upper_school_teachers(Teacher_Code,Subject_1, Subject_2, Subject_3,Subject_4,Subject_5) values ('$tr_code','$Eng','$Kis','$Mat','$SST','$SCI')" ;
if(mysqli_query($conn, $sql)){

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

</html>
