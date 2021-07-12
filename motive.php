<?php

include 'layout/_header.php';


?><nav class="navbar navbar-inverse navbar-fixed-top">
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
             <li><a href="about.php">About Us</a></li>
             <li><a href="login.php">Login</a></li>
             <li><a href="register.php">Sign Up</a></li>
              <li><a href="availability.php">Check Availability</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><a href="#" id="Heading">Why Are We Here For?</a></h1>
            <p id="About">
                Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.
            </p>
            <hr id="line_1">
            <h1><a href="#" id="Heading2">Features--></a></h1>
            <p>

                - Blood Donation Camp & Camp Organiser Management.<br>
- Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.<br>
- Inventory management in blood bank for storage and issuance of blood.<br>
- Blood requisition and issuance of blood.<br>
- Online transfer of blood from one blood bank to another.<br>
- Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).<br>
- Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.<br>
- Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.<br>
- Fridge Wise Stock Position and Printing of Fridge Stickers.<br>
- List of Donors who are eligible for donation on a particular date with contact Number.<br>
- Camp Wise Donor List and Printing of Donor Cards.<br>
            </p>
        </div>
        <div class="col-md-6">
            <img src="img/donate_blood_right.jpg" class="img img-responsive img-thumbnail" ><br>
             <img src="img/register.jpg" class="img img-responsive img-thumbnail">
        </div>



    </div>
</div><br>
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
<?php include 'layout/_footer.php'; ?>