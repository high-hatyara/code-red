<?php
$title="Login";
include 'layout/_header.php'; 
if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['login'])) {
    $submit = $_POST['login'];
}
$error="";
$success="";

if(isset($_POST['login'])) {
  if($username=="admin"){
    if($password=="password"){
      $error="";
      $success="Welcome Admin";
    }
    else{
      $error="Invalid password";
      $success="";
    }
  } 
  else{
    $error="Invalid username";
      $success="";
  }
}
?><!-- Fixed navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.php"><img src="img/logo.png" height="50%" width="30%"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li><a href="index.php">Home</a></li>
              <li><a href="register.php">Sign Up</a></li> 
            <li ><a href="about.php">About Us</a></li>
              <li><a href="availability.php">Check Availability</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </br></br>

<div class="container">
<div class="row"><div class="col-md-3"></div>
    <div class="col-md-6">
      
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-6">
                    <img src="img/security-icon.png" class="img img-responsive img-thumbnail">
                </div>
                <h5> User Login </h5>
            </div>
            <div class="panel-body">
              <p class="error"><?php echo $error;?></p><p class="success"><?php echo $success; ?> </p>
                <form class="form-vertical" role="form" method="post" >
                    <div class="form-group">
                        <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn">
                        <button  type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
                        <a href="register.php" class="btn btn-sm btn-warning">I do not have username or password</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <img src="img/left-index-logo.jpg" class="img img-responsive">
    </div>
</div>

<?php include 'layout/_footer.php'; ?>

