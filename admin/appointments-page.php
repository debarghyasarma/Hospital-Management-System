<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Material+Icons"
    />
    <link rel="stylesheet" href="appointments-page.css" />
    <style>
      <?php include("appointments-page.css"); ?>
    </style>
  </head>
  <body>
  
    <nav>
      <nav class="navbar navbar-expand-lg navbar-light navbar-fixed mb-0">
        <div class="navbar-heading">
          <h6>HOSPITAL MANAGEMENT</h6>
        </div>
        <i
          class="material-icons text-light"
          style="height: 0px; margin-left: 810px; margin-bottom: 22px"
          >power_settings_new</i
        >
        <a
          href="http://localhost/Hospital%20Management%20System/admin/signin.php"
          style="margin-left: 5px; font-weight: 500; color: white"
        >
          Logout
        </a>
      </nav>

      <div class="vertical-nav" id="sidebar">
        <div>
          <img src="admin.jpeg" alt="Avatar" class="avatar" />
        </div>

        <div class="media-body">
          <h5 class="font-weight-white text-dark mb-0">Admin</h5>
        </div>
        <?php 
          include("dbcon.php");
       ?>
        <h6 class="admin-name text-dark">Debarghya</h6>
        <ul class="nav flex-column mb-0">
        <li class="nav-item">
              <a
                href="http://localhost/Hospital%20Management%20System/admin/admin.php"
                class="nav-link text-light font-weight-normal"
              >
                <i class="material-icons" style="height: 0px">dashboard</i>
                <p class="link1">Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a
                href="doctor.html"
                class="nav-link text-light font-weight-normal"
              >
                <i class="material-icons" style="height: 4px">medication</i>
                <p class="link2">Doctor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-light font-weight-normal">
                <i class="material-icons" style="height: 4px">people</i>
                <p class="link3">Patient</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link text-light font-weight-normal">
                <i class="material-icons" style="height: 4px">today</i>
                <p class="link3">Appointments</p>
              </a>
            </li>
        </ul>
      </div>
    </nav>

    <!-- Cards -->
    <div class="row" style="margin-top: 30px; margin-left:4px">
     <a href="http://localhost/Hospital%20Management%20System/admin/view-appointments.php"
       style="text-decoration: none">
      <div
        class="card"
        style="
          width: 30rem;
          margin-left: 260px;
          margin-top: 15px;
          height: 155px;
          box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
          background-color: #eb1f00;
        "
      >
        <div  style="margin-top: 15px; margin-left:20px">
           <div style="margin-top:10px">
             <h5 class="text-light">View Appointments</h5>
           </div>
          <div>
            <img
              src="calendar.png"
              alt="Avatar"
              class="avatar"
              style="margin-top: 15px; width: 60px; height: 60px; margin-left: 1px;"
            />
          </div>  
        </div>
      </div>
    </a>

    <a href="http://localhost/Hospital%20Management%20System/admin/approve-appointments.php"
       style="text-decoration: none">
      <div
        class="card"
        style="
          width: 30rem;
          margin-left: 97px;
          margin-top: 15px;
          height: 155px;
          box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
          background-color:  #187bed;
        "
      >
        <div  style="margin-top: 15px; margin-left:20px">
           <div style="margin-top:10px">
             <h5 class="text-light">Approve Appointment</h5>
           </div>
          <div>
            <img
              src="tick.png"
              alt="Avatar"
              class="avatar"
              style="margin-top: 15px; width: 60px; height: 60px; margin-left: -2px;"
            />
          </div>  
        </div>
      </div>
    </a>  
    </div>
    
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
