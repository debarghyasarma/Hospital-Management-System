<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Patient Panel</title>
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
    <link rel="stylesheet" href="book-appointments.css" />
    <style>
      <?php include("book-appointments.css"); ?>
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
          <img src="patient.jpg" alt="Avatar" class="avatar" />
        </div>

        <div class="media-body">
          <h5 class="font-weight-white text-dark mb-0">Patient</h5>
        </div>
        <?php 
          session_start();
          include("dbcon.php");
          
          $pname =  isset($_GET['pname']) ? $_GET['pname'] : '';
          $pemail = isset($_GET['email']) ? $_GET['email'] : '';
          $subnames = explode(" ",$pname);
          $firstname = $subnames[0];
          $lastname = $subnames[1];

       ?>
        <h6 class="patient-name text-dark" id="dname"><?php echo $pname;?></h6>
        <ul class="nav flex-column mb-0">
          <li class="nav-item">
            <a href="" class="nav-link text-light font-weight-normal">
              <i class="material-icons" style="height: 0px">dashboard</i>
              <p class="link1">Dashboard</p>
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

   
    <form method="post">
       <div class="form-group">
          <textarea placeholder="symptoms" name="symptoms" class="form-control text-area" id="exampleFormControlTextarea1" rows="6"></textarea> 
        </div>
              <?php 
           
            $query = "SELECT * FROM doctor_register WHERE approve=1";
            $results = $conn->query($query);
            if ($results->num_rows>0) {  
               ?>    
             <div class="form-group">
               <select
                class="form-control"
                style="width: 250px; margin-left: 400px"
                name="specilization"
                >    
                <option>Select Doctor</option> 
                 <?php 
                   while($row = $results->fetch_assoc()) {
                ?> 
                <option value="<?php echo $row['firstname']." ".$row['lastname']?>"><?php echo $row['firstname']." ".$row['lastname']."(".$row['specilization'].")"?></option> 
               
               <?php 
                   }
                 }
              
               ?>
               </select>
            </div>
               <input
                id="submit-btn"
                type="submit"
                name="submit"
                value="BOOK APPOINTMENT"
                class="book-appointment"
               />
    </form>
     
    <?php 
      
      if(isset($_POST['submit']) && !empty($_POST['submit'])) 
      {
        $symptoms = addslashes(strip_tags($_POST['symptoms']));
        $specilization = addslashes(strip_tags($_POST['specilization']));
        
        // $sql = "UPDATE patient_register SET symptoms = '$symptoms', doctor_assigned = '$specilization'
        //        WHERE firstname = '$firstname' AND lastname = '$lastname'";
        $sql = "INSERT INTO appointments (email,name,symptoms,doctor) VALUES ('".$pemail."','".$pname."','".$symptoms."','".$specilization."')";       
        
        if($conn->query($sql))
        {
          $_SESSION['user'] = 1;
        }
       else
          $_SESSION['user'] = "";
     
     }
  ?>
  

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
