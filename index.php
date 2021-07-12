<?php

include 'layout/_header.php';


?> <!-- Fixed navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top ">
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
            
             <li><a href="about.php">About Us</a></li>
             <li><a href="login.php">Login</a></li>              
             <li><a href="register.php">Sign Up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  

    <div id="loading"></div>

<video autoplay muted loop id="myVideo">
  <source src="video/vid3.mp4" type="video/mp4">
 
</video>

        <div class="content1">
  <h2 style="text-align: center; color:#B71C1C;">"We are a reliable blood group management system"</h2>
        </div>
<div class="button">
  <a href="availability.php"><button>Check Availability</button></a>
</div>
<style>
* {
  box-sizing: border-box;
}


body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  margin-left: 15%;
  margin-right: -10%;
  margin-top: 40%;
  margin-bottom: -5%;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;


}

button{
   background: #8C9EFF;
  position: absolute;
  bottom:0;
  color: #000000;
  width: 15%;
  margin-left: 635px;
  margin-bottom:70px;

}
.content1 {
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  bottom:0;
  color: #000000;
  width: 50%;
  height: 150px;
  margin-left: 25%;
  margin-right:300px;
  margin-bottom: 50px;
}
<style>
/* unvisited link */
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: red;
}

/* mouse over link */
a:hover {
  color: red;
}

/* selected link */
a:active {
  color: red;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}</style>

</style>


</body>
</html>