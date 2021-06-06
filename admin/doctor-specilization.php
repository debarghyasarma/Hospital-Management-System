<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department and Doctors</title>
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
    <link rel="stylesheet" href="doctor-specilization.css" />
</head>
<body>
    <div>

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
              <a
                href="http://localhost/Hospital%20Management%20System/admin.php"
                class="nav-link text-light font-weight-normal"
              >
                <i class="material-icons" style="height: 0px">dashboard</i>
                <p class="link1">Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="doctor.html" class="nav-link text-light font-weight-normal">
                <i class="material-icons" style="height: 4px">medication</i>
                <p class="link2">Doctor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="patient.html" class="nav-link text-light font-weight-normal">
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

       <div class="doctor-bar">
        <h6 class="text-light" style="margin-left: 430px; margin-top: 5px">
         Department and doctors
        </h6>
      </div>

      <?php 
          include("dbcon.php");
          $sql = "SELECT * FROM doctor_register WHERE approve=1";
		      $results = $conn->query($sql);

          if ($results->num_rows>0) {
          ?>
      <table class="doctor-table" id="doctor-table" border="1">
        <thead>
          <tr>
            <th>Department</th>
            <th>Doctor Name</th>
            <th>Mobile</th>    
          </tr>
        </thead>
        <?php 
         while($row = $results->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td style="font-size: 13px" id="dept"><?php echo $row['specilization']?></td>
            <td style="font-size: 13px" id="name"><?php echo $row['firstname']." ".$row['lastname']?></td>
            <td style="font-size: 13px" id="mobile"><?php echo $row['mobile']?></td>
          </tr>
        </tbody>
        <?php			
            }
          }  
            ?> 
      </table> 
    </div>
</body>
</html>