

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>School Management System</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
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
          <li class="menu-item"><a href="home.php">Login</a></li>
        </ul>
      </nav>
    </header>

    

    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>

    <div class="row">
    <div class="col-lg-5 m-auto">
      <div class="card mt-3 ">
        <div class ="card-title text-center">
          <img src="images/avatar.png" width="150px" height="150px">
        </div>
        <div class="card-body">
          <form method="post" action="home.php">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-user fa-2x"></i>
                </span>
              </div>
              <input type="email" name="username" class="form-control py-4" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-lock fa-2x"></i>
                </span>
              </div>
              <input type="password" name="password" class="form-control py-4" placeholder="Password" required>
            </div>
            <input name="login"value="Login" id="loginbtn" class="btn btn-success" type="submit"/>
            <div class="float-right"><label class="checkbox-inline">
              <input type="checkbox" name="remember"/>Remember Me
            </label></div>
            </br>
            <br/>
            <a href="signup.php">Forgot Password</a>
<?php
if(isset($_POST['login'])){
$error1="";
  $error2='Incorrect Login Credentials!!!';
  echo $error1;
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$Username=$conn->real_escape_string($_POST['username']);
$Password=$conn->real_escape_string($_POST['password']);

$sql="select * from admin_login where Username='$Username' AND Password='$Password'" ;
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
  session_start();
   
$_SESSION['username']= $Username;  // Initializing Session with value of PHP Variable
header("Location: Admin_homepage.php"); 
}


if(isset($_SESSION['Logout']))
  {
header("Location: home.php");

}
}
?>

<?php
if(isset($_POST['login'])){
$error1="";
  $error2='Incorrect Login Credentials!!!';
  echo $error1;
$conn=mysqli_connect("localhost", "root", "", "ekani_primary_school");
$Username=$conn->real_escape_string($_POST['username']);
$Password=$conn->real_escape_string($_POST['password']);

$sql="select * from teacher_login where Username='$Username' AND Password='$Password'" ;
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
while($row=mysqli_fetch_array($result)){
  
  $uid=$row['Username'];
  $tsc=$row['Teacher_Code'];
}
  session_start(); 
$_SESSION['Username']= $uid; 
$_SESSION['Teacher_Code']=$tsc; // Initializing Session with value of PHP Variable
header("Location: teachers_page.php"); 
}
else{
  ?>
  <br/>
  
    <?php echo $error2;}

if(isset($_SESSION['Logout']))
  {
header("Location: home.php");

}
}
?>

          </form>
      </div>

    </div>
  </div>
  </body>

</html>
