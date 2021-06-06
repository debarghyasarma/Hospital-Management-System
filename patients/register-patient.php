<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Patient</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="register-patient.css" />
  </head>
  <body>

   <?php 
       include("dbcon.php");   
       if(isset($_POST) && !empty($_POST)) {
       $firstname = addslashes(strip_tags($_POST['firstname']));
       $lastname = addslashes(strip_tags($_POST['lastname']));
       $email = addslashes(strip_tags($_POST['email']));
       $password = md5(addslashes(strip_tags($_POST['password'])));  
       $specilization = addslashes(strip_tags($_POST['specilization']));
       $symptoms = addslashes(strip_tags($_POST['symptoms']));
       $image = $_POST['file'];
       $mobile = addslashes(strip_tags($_POST['mobile']));
       $address = addslashes(strip_tags($_POST['address']));

       $sql = "INSERT INTO patient_register (firstname,lastname,email,password,doctor_assigned,image,mobile,symptoms,address) 
       VALUES('".$firstname."','".$lastname."','".$email."','".$password."','".$specilization."',
             'image','".$mobile."','".$symptoms."','".$address."')";

      session_start();
      if($conn->query($sql))
      {
        $_SESSION['signup'] = 1;
      }
      else
        $_SESSION['signup'] = 0;

    }
  ?>


    <div class="signin-card">
      <div id="card-content">
        <div id="card-title" style="margin-left: 525px; margin-top: 70px">
          <h2 style="margin-left: 25px">ADMIT PATIENT</h2>
          <div
            class="underline-title"
            style="margin-right: 700px; width: 275px"
          ></div>

         
          <!-- Confirmation -->
          <div  style="margin-left: -97px; width: 450px; margin-top: 30px">
					<?php if(isset($_SESSION['signup']) && $_SESSION['signup']==1){?>
					   
               <div class="alert alert-info">
                   <strong>Congratulations! </strong> You Have signed up succesfully!!
                </div>
					<?php } elseif(isset($_SESSION['signup']) && $_SESSION['signup']==0){?>
					
              <div class="alert alert-info">
                   <strong>Sorry! </strong> You Have not signed up succesfully
              </div> 
						
					<?php } ?>
          </div>
            
          
        </div>
        <form method="post">
          <div class="row">
            <div class="form-group">
              <input
                id="firstname"
                class="form-control"
                type="firstname"
                name="firstname"
                autocomplete="on"
                placeholder="Firstname"
                style="margin-left: 400px; width: 250px; margin-top: 40px"
                required
              />
            </div>

            <div class="form-group">
              <input
                id="lastname"
                class="form-control"
                type="lastname"
                name="lastname"
                autocomplete="on"
                placeholder="Lastname"
                style="margin-left: 680px; width: 250px; margin-top: -54px"
                required
              />
            </div>
          </div>

          <div class="row">
            <div class="form-group">
              <input
                id="email"
                class="form-control"
                type="email"
                name="email"
                autocomplete="on"
                placeholder="Email"
                style="margin-left: 400px; width: 250px; margin-top: -4px"
                required
              />
            </div>

            <div class="form-group">
              <input
                id="password"
                class="form-control"
                type="password"
                name="password"
                placeholder="Password"
                style="margin-left: 680px; width: 250px; margin-top: -53px"
                required
              />
            </div>
          </div>

          <div class="row">
            <div class="form-group">
            <input
                id="address"
                class="form-control"
                type="address"
                name="address"
                autocomplete="on"
                placeholder="Address"
                style="margin-left: 400px; width: 250px; margin-top: -5px"
                required
              />
            </div>

            <div class="form-group">
              <input
                id="mobile"
                class="form-control"
                type="mobile"
                name="mobile"
                autocomplete="on"
                placeholder="Mobile"
                style="margin-left: 680px; width: 250px; margin-top: -53px"
                required
              />
            </div>
          </div>

        <div class="row">
            <div class="form-group">
              <input
                id="symptoms"
                class="form-control"
                type="symptoms"
                name="symptoms"
                autocomplete="on"
                placeholder="Symptoms"
                style="margin-left: 400px; width: 250px; margin-top: -5px"
                required
              />
            </div>
           <?php 
            include("dbcon.php");
            $sql = "SELECT * FROM doctor_register WHERE approve=1";
            $results = $conn->query($sql);

            if ($results->num_rows>0) {
            ?>    
             <div class="form-group">
               
               <select
                class="form-control"
                style="width: 250px; margin-left: 680px; margin-top: -54px"
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
        </div>

       <div class="row">
           <div class="form-group">
             <input
                id="file"
                class="form-control"
                type="file"
                name="file"
                autocomplete="on"
                style="
                  margin-left: 400px;
                  width: 250px;
                  margin-top: -5px;
                  height: 38px;
                "
                required
              />
            </div>
        </div>

          <input
            id="submit-btn"
            type="submit"
            name="submit"
            value="REGISTER"
            style="margin-left: 575px"
          />
        </form>
     
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
