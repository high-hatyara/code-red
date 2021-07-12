<?php

$title = "Join Us";
$setJoinUsActive = "active";
include 'layout/_header.php';


?> <!-- Fixed navbar -->
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
             <li><a href="login.php">Login</a></li>
              <li><a href="availability.php">Check Availability</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </br></br>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
            <?php if(isset($success)): ?>
            <div class="alert-success fade-out-5"><?= $success; ?></div>
            <?php endif; ?>
            <?php if(isset($message)): ?>
            <div class="alert-danger fade-out-5"><?= $message; ?></div>
            <?php endif; ?>
            
            <form method="post" class="form-horizontal" role="form" action="register.php">
                <div class="panel panel-default">
                    <div class="panel-heading">
                <div class="col-md-4">
                    <img src="img/register.jpg" class="img img-responsive">
                </div>
                <p>Join our community and reach out your hands for the others in need. Just by registering below you will make an agreement
                    with us that you are ready to donate and will be available whenever we will need you.</p>               
            </div>
                    <div class="panel-heading">
                        <h5>Basic Info</h5>  </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3">Name</label>
                            <div class="col-sm-3">
                                <input type="text" name="firstName" placeholder="First Name" class="form-control" required="true">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="middleName" placeholder="Middle Name" class="form-control" >
                            </div>
                            <div class="col-sm-3">
                                <input type="text" name="lastName" placeholder="Last Name" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Gender</label>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="male" name="sex" checked="true">Male                         
                            </div>
                            <input type="radio" value="female" name="sex">Female                          

                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="b_type" class="form-control">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control" required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Mobile</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="mobile" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="phone" class="form-control">
                            </div>
                        </div>           
                    </div>
                    <div class="panel-heading">
                        <h5>Medical Info</h5>
                    </div>
                      
                        <div class="form-group">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" value="" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-4">Blood Related Medical History(if any)</label>
                            <div class="col-sm-8">
                                <input type="text" name="aids" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <label class="col-sm-4"> </label>
                            <div class="col-sm-8">
                                <button class="btn btn-success" type="submit" name="submitBtn" >Register as a Donor</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
   
        </div>
<a href="login.php"><h4 style=" margin-left: 43%; color:black;  text-decoration: underline overline;">Already registered?</h4></a>
        <div class="col-md-3">
        </div>
    </div>
</div>
<?php include 'layout/_footer.php'; ?>
