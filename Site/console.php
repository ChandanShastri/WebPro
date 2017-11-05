<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Data Entry Panel</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>


<!-- DATA ENTRY  -->
<div class="container">
  <br><br>
<center><h3> Welcome to Data Entry Panel <h3></center>
<br><br>




  <div class="row">
    <form class="col s12" method="post" action="Blackboards/blackboard1.php">

      <div class="row">
        <div class="input-field col s12">
          USN :
          <input name="Usn" id="xname" type="text" class="validate">
          <label for="xname"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          Name :
          <input placeholder="" name="Fname" id="first_name" type="text" class="validate">
          <label for="first_name"></label>
        </div>
        <div class="input-field col s6">
          Last Name :
          <input name="Lname" id="last_name" type="text" class="validate">
          <label for="last_name"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          Phone :
          <input name="Phone" value="" id="Phone" type="number" class="validate">
          <label for="xname"></label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          Parent's Phone :
          <input name="Phone" value="" id="Phone" type="number" class="validate">
          <label for="xname"></label>
        </div>
      </div>



      <p>
      <input name="Gender" type="radio" id="test1" value="M" />
      <label for="test1">Male</label>
    </p>
    <p>
      <input name="Gender" type="radio" id="test2" value="F" />
      <label for="test2">Female</label>
    </p>




        <div class="row">
          <div class="input-field col s12">
            <input id="button" type="submit" class="validate" value="Submit">
            <label for="button"></label>
          </div>


      </div>
    </form>
  </div>
<center>



  <?php
  session_start();

if ($_SESSION['varname']=="SS")
{
  echo "<script>alert(\"System : DATA SAVED \")</script>"
}
  error_reporting(0);

  if($_POST["name"]==null)
  {
  echo "<b> System Ready for Operation.</b>";
  }
  else
  {
    echo "<script>alert(\"System : DATA SAVED \")</script>";
    echo $_POST["name"];
    header("Location: view.php");

  }

  $con = mysqli_connect("localhost","chandanshastri","321654","COLLEGE");

  if (mysqli_connect_errno())
  {
    echo "Sc Server is Down, Please Contact Chandan Shastri" . mysqli_connect_error();
  }

  else echo "<center><b><br><br><br><br><br><br> Database System and Server Status : </b><i> Online </i> </center>";

  ?>

</center>
</div>





  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>