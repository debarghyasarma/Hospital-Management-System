<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="doctorlogin.css" />
    <title>Doctor Login Page</title>
  </head>
  <body class="body">

  <?php
   include ("dbcon.php");
   if(isset($_POST['submit']) && !empty($_POST['submit'])) {

     $email = addslashes(strip_tags($_POST['email']));
     $password = addslashes(strip_tags($_POST['password']));
    
     $sql = "SELECT email FROM doctor_register WHERE email = '".$email."'";
     $result = $conn->query($sql);
     session_start();
     if($result->num_rows>0)
     {
      $user = $result->fetch_assoc();
      $_SESSION['user'] == $user;
      header('Location: http://localhost/Hospital%20Management%20System/doctors/doctor-dashboard.php?email='.$email.'');
     }
     else{
       $_SESSION['user'] = "";
     } 
   }

  ?>
    <div>
      <nav
        class="navbar navbar-expand-lg navbar-light navbar-fixed bg-info mb-0"
      >
        <div class="navbar-heading">
          <a class="navbar-brand text-light" href="#">Hospital Management</a>
        </div>

        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav" id="#">
            <li class="nav-item">
              <a class="nav-link text-light mt-lg-1" href="#">Admin</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light mt-lg-1" href="#">Doctor</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light mt-lg-1" href="#">Patient</a>
            </li>
          </ul>

          <ul>
            <div class="about">
              <li class="form-inline">
                <a class="nav-link text-light" href="#">About</a>
              </li>
            </div>
          </ul>
          <ul>
            <div class="contactus">
              <li class="form-inline">
                <a class="nav-link text-light" href="#">Contact</a>
              </li>
            </div>
          </ul>
        </div>
      </nav>

      <div class="signin-card">
        <div id="card-content">
          <div id="card-title">
            <h2>DOCTOR LOGIN</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form" id="loginform" action="">
          <!-- <div class="form" method="post">  -->
            <label for="user-email" style="padding-top: 13px">
              &nbsp;Email
            </label>
            <input
              id="user-email"
              class="form-content"
              type="email"
              name="email"
              autocomplete="on"
              required
            />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top: 22px"
              >&nbsp;Password
            </label>
            <input
              id="user-password"
              class="form-content"
              type="password"
              name="password"
              required
            />
            <div class="form-border"></div>
            <h6 style="margin-top: 20px; margin-left: 90px">
              Don't have an account?
            </h6>
            <a href="#">
              <legend
                id="forgot-pass"
                style="margin-left: 265px; margin-top: -30px; font-size: 17px"
              >
                Signup
              </legend>
            </a>
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" class="submit" />
          <!-- </div>  -->
          </form>
        </div>
      </div>
    </div>

    <?php if(isset($_SESSION['user']) && $_SESSION['user'] == 0) { ?>              
      <div class="alert alert-danger">
         <strong style="margin-left:530px">Sorry! </strong>You are not a Doctor!!
      </div>              
     <?php } ?>

    <!-- <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script src="doctorlogin.js"></script>   -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
