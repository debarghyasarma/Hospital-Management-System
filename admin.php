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
    <link rel="stylesheet" href="admin.css" />
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
          href="http://localhost/Hospital%20Management%20System/signin.php"
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
        <h6 class="admin-name text-dark">Debarghya</h6>

        <ul class="nav flex-column mb-0">
          <li class="nav-item">
            <a href="#" class="nav-link text-light font-weight-normal">
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
            <a href="#" class="nav-link text-light font-weight-normal">
              <i class="material-icons" style="height: 4px">today</i>
              <p class="link4">Appointment</p>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Cards -->
    <div class="cards-row" style="margin-left: 8px; margin-top: 20px">
      <div
        class="card"
        style="
          width: 21rem;
          margin-left: 240px;
          margin-top: 15px;
          height: 190px;
          box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
          background: linear-gradient(rgb(253, 172, 106), rgb(255, 100, 100));
        "
      >
        <div class="card-body">
          <h5 class="card-title">Doctors</h5>

          <div>
            <img
              src="doctoricon.png"
              alt="Avatar"
              class="avatar"
              style="float: right; margin-top: -35px; width: 70px"
            />
          </div>
          <div style="margin-top: 45px">
            <h5 class="text-light" style="margin-top: 55px">Total Doctors:</h5>
            <h3
              style="margin-left: 160px; margin-top: -44px"
              class="text-light"
            >
              4
            </h3>
            <h6 class="text-light">Wants Approval:</h6>
            <h6 style="margin-left: 165px; margin-top: -27px; color: white">
              1
            </h6>
          </div>
        </div>
      </div>

      <div
        class="card"
        style="
          width: 21rem;
          margin-left: 620.5px;
          margin-top: -189px;
          height: 190px;
          box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
          background: linear-gradient(rgb(111, 111, 255), rgb(52, 227, 250));
        "
      >
        <div class="card-body">
          <h5 class="card-title">Patients</h5>
          <div>
            <img
              src="patienticon.png"
              alt="Avatar"
              class="avatar"
              style="float: right; margin-top: -35px; width: 70px"
            />
          </div>
          <div style="margin-top: 45px">
            <h5 class="text-light" style="margin-top: 55px">
              Total Admissions:
            </h5>
            <h3
              style="margin-left: 194px; margin-top: -44px"
              class="text-light"
            >
              4
            </h3>
            <h6 class="text-light">Wants to Admit:</h6>
            <h6 style="margin-left: 160px; margin-top: -27px; color: white">
              1
            </h6>
          </div>
        </div>
      </div>

      <div
        class="card"
        style="
          width: 21rem;
          margin-left: 1001px;
          margin-top: -189px;
          height: 190px;
          box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);
          background: linear-gradient(rgb(137, 76, 194), rgb(255, 69, 255));
        "
      >
        <div class="card-body">
          <h5 class="card-title">Appointments</h5>
          <div>
            <img
              src="appointmenticon.png"
              alt="Avatar"
              class="avatar"
              style="float: right; margin-top: -35px; width: 70px"
            />
          </div>
          <div style="margin-top: 45px">
            <h5 class="text-light" style="margin-top: 55px">
              Total Appointment:
            </h5>
            <h3
              style="margin-left: 216px; margin-top: -44px"
              class="text-light"
            >
              4
            </h3>
            <h6 class="text-light">Approve Appointments:</h6>
            <h6 style="margin-left: 217px; margin-top: -27px; color: white">
              1
            </h6>
          </div>
        </div>
      </div>
      <!-- Cards -->

      <!-- TABLE -->
      <div class="doctor-bar">
        <h6 class="text-light" style="margin-left: 155px; margin-top: 5px">
          Recent Doctors
        </h6>
        
      </div>   
      <?php 
          include("dbcon.php");
          $sql = "SELECT * FROM doctor_register";
		      $results = $conn->query($sql);

          if ($results->num_rows>0) {
          ?>
      <table class="doctor-table" border="1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Mobile</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php 
         while($row = $results->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td style="font-size:13px "><?php echo $row['firstname']." ".$row['lastname']?></td>
            <td style="font-size:13px"><?php echo $row['specilization']?></td>
            <td style="font-size:13px"><?php echo $row['mobile']?></td>
            <td style="font-size:13px">On duty</td>
          </tr> 
        </tbody>
        <?php			
            }
          }  
            ?>         
      </table>

      <div class="patient-bar">
        <h6 class="text-light" style="margin-left: 155px; margin-top: 5px">
          Recent Patients
        </h6>
       
      </div>
      <table class="patient-table" border="1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Symptoms</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Status</th>
          </tr>
        </thead>
       
        <tbody>
          <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>656565</td>
            <td>fgfgfgf</td>
            <td>4g4g4g4</td>
          </tr>
        </tbody>
      </table>
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
