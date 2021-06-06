
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Panel</title>
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
    <link rel="stylesheet" href="doctor-patients.css" />
    <style>
      <?php include("doctor-patients.css"); ?>
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
          href="http://localhost/Hospital%20Management%20System/doctors/doctorlogin.php"
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
          <h5 class="font-weight-white text-dark mb-0">Doctor</h5>
        </div>
        <?php 
          include("dbcon.php");
          $dname =  isset($_GET['dname']) ? $_GET['dname'] : '';
       ?>
        <h6 class="doctor-name text-dark" id="dname"><?php echo $dname;?></h6>
        <ul class="nav flex-column mb-0">
          <li class="nav-item">
            <a href="" class="nav-link text-light font-weight-normal">
              <i class="material-icons" style="height: 0px">dashboard</i>
              <p class="link1">Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link text-light font-weight-normal">
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


      <!-- TABLE -->
    <div class="table-section">
        <div class="table-left">

           <div class="patient-bar">
              <h6 class="text-light" style="margin-top: 5px; margin-left:210px">
               Your Discharged Patient List
             </h6> 
           </div>  
            
             <table class="patient-table" border="1">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Admit Date</th>
                    <th>Release Date</th>
                    <th>Symptoms</th>
                    <th>Mobile</th>
                    <th>Address</th>
                 </tr>
              </thead>
              <?php 
                include("dbcon.php");
                $admit_date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
                $release_date = strtotime("26-05-2021");
                $dname =  isset($_GET['dname']) ? $_GET['dname'] : '';
                $sql = "SELECT * FROM patient_register WHERE discharge=1 and doctor_assigned = '$dname' ";
                $results = $conn->query($sql);
    
                if ($results->num_rows>0) {
                while($row = $results->fetch_assoc()) {
               ?>
              <tbody>
                 <tr>
                    <td style="font-size:13px "><?php echo $row['firstname']." ".$row['lastname']?></td>
                    <td style="font-size:13px"><?php echo $admit_date->format('d-m-Y');?></td>
                    <td style="font-size:13px"><?php echo date("d-m-Y", $release_date);?></td> 
                    <td style="font-size:13px"><?php echo $row['symptoms']?></td>   
                    <td style="font-size:13px"><?php echo $row['mobile']?></td>  
                    <td style="font-size:13px"><?php echo $row['address']?></td>  
                </tr> 
             </tbody>
             <?php			
               }
              }  
              ?>         
            </table>
         <!-- </div> -->
       </div>
    
    </div>
    <script src="doctordashboard.js"></script>
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
    <!-- <script src="admin-doctors.js"></script>
    <script src="admin-patient.js"></script> -->
  </body>

</html>
