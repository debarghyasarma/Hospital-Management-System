
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Bill</title>
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
    <link rel="stylesheet" href="patient-bill.css" />
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
 
    
   <div class=card>
       <h3 style="margin-top: 20px; margin-left: 20px">Hospital Management</h5>
       <?php 
        include("dbcon.php");
        $pid = isset($_GET['pid']) ? $_GET['pid'] : ' ';
        $admit_date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
        $release_date = strtotime("15-06-2021");
        $days_spent = round(($release_date-time())/ (60 * 60 * 24))+1;
        $query = "SELECT * FROM patient_register WHERE pid = ".$pid." ";
        $results = $conn->query($query);
        if($results->num_rows>0) {
        
        ?>
        <?php  while($row = $results->fetch_assoc()) { ?>
        <h6 style=" margin-bottom: -25px;  margin-left: 20px; margin-top:10px;">
            Pid: <span id="pid"><?php echo $pid ?></span></h6>
        <div class="row">
          <h6 style="margin-left: 35px; margin-top:30px" id="pname">Patient Name: <?php echo $row['firstname']." ".$row['lastname']?></h6>
          <h6 style="margin-left: 495px; margin-top: -27px;" id="dname" >Doctor Name: <?php echo $row['doctor_assigned']?></h6>
       </div>
       <div class="row" style="margin-left:20px;">
          <h6 id="mobile">Patient Mobile: <?php echo $row['mobile']?></h6>
          <h6 style="margin-left: 460px; margin-top: -27px" id="admit-date">Admit Date: <?php echo $admit_date->format('d-m-Y');?></h6>
       </div>
       <div class="row" style="margin-left:20px;">
          <h6 id="address">Patient Address: <?php echo $row['address']?></h6>
          <h6 style="margin-left: 460px; margin-top: -27px" id="release-date">Release Date: <?php echo date("d-m-Y", $release_date); ?></h6>
       </div>

        <div class="row" style="margin-left:20px;">
          <h6 id="symptoms">Symptoms: <?php echo $row['symptoms']?></h6>
          
        </div>  
        <h6 style="margin-left: 20px; margin-top: 0px" >Days Spent: <span id="days-spent"><?php echo round(($release_date-time())/ (60 * 60 * 24)); ?></span></h6>
       <?php 
         } 
        }
        ?>
       <div class="items">
          <h6 class="mt-1">Items</h6>
       </div>
        <div class="form-section"> 
          <div id="form">
               <div class="row" style="margin-top: -30px">   
                    <h6  style="margin-left: 350px; margin-top: 30px;">Total Room Charge:</h6>
                        <div class="form-group">
                            <input
                               id="room-charge"
                               class="form-control"
                               type="number"
                               min="1000"
                               step="1000"
                               name="room-charge"
                               autocomplete="on"
                               placeholder="In Rupees"
                               style="margin-left: 700px; width: 250px; margin-top: -34px"
                               required
                            />
                         </div>
                 </div>

                <div class="row" style="margin-top: -20px">
                     <h6  style="margin-left: 350px; margin-top: 30px;">Doctor Fee :</h6>
                        <div class="form-group">
                            <input
                               id="doctor-fee"
                               class="form-control"
                               type="doctor-fee"
                               name="doctor-fee"
                               autocomplete="on"
                               placeholder="In Rupees"
                               style="margin-left: 700px; width: 250px; margin-top: -34px"
                               required
                            />
                         </div>
                 </div>

                <div class="row"  style="margin-top: -21px">
                      <h6  style="margin-left: 350px; margin-top: 30px;">Medicine Cost:</h6>
                         <div class="form-group">
                            <input
                               id="medicine-cost"
                               class="form-control"
                               type="medicine-cost"
                               name="medicine-cost"
                               autocomplete="on"
                               placeholder="In Rupees"
                               style="margin-left: 700px; width: 250px; margin-top: -34px"
                               required
                            />
                         </div>
                </div>

                <div class="row" style="margin-top: -21px">
                       <h6  style="margin-left: 350px; margin-top: 30px;">Other Charges:</h6>
                         <div class="form-group">
                            <input
                               id="other-charges"
                               class="form-control"
                               type="other-charges"
                               name="other-charges"
                               autocomplete="on"
                               placeholder="In Rupees"
                               style="margin-left: 700px; width: 250px; margin-top: -34px"
                               required
                            />
                         </div>
                </div>


                 <input
                  class="submit-btn"
                  type="submit"
                  name="submit"
                  value="GENERATE BILL"
                  style="margin-left: 575px"
                 />
      </div>
         </div>    
     </div>


    </div>
    
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script src="patient-bill.js"></script>
   
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