
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Page</title>
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
    <link rel="stylesheet" href="bill-pdf.css" />
</head>
<body>
       <?php 
      
        $pname = $_GET['pname'];
        $dname = $_GET['dname'];
        $mobile = $_GET['mobile'];
        $address = $_GET['address'];
        $symptoms = $_GET['symptoms'];
        $roomcharge = $_GET['roomcharge'];
        $doctorfee = $_GET['doctor-fee'];
        $medicinecost = $_GET['medicine-cost'];
        $othercharges = $_GET['other-charges'];
        $admit_date = $_GET['admit_date'];
        $release_date = $_GET['release_date'];
        $days_spent = $_GET['days_spent'];
        $totalbill = $roomcharge + $doctorfee + $medicinecost + $othercharges;
        
        ?>

    <div class="bill">   
        
            <h3 style="margin-top: 20px; margin-left: 430px">Hospital Management</h5>    
               
               <div class="bill-left">
                    <h6><?php echo $pname?></h5>
                    <h6><?php echo $mobile?></h6>
                    <h6><?php echo $address?></h5>
                    <h6><?php echo $symptoms?></h5>
               </div>

               <div class="bill-right">
                    <h6><?php echo $dname?></h6>
                    <h6><?php echo $admit_date?></h6>
                    <h6><?php echo $release_date?></h6>
                    <h6>Days Spent: <?php echo $days_spent?></h5>
               </div>

               
            <h4 style="margin-left:540px; margin-top:20px;">ITEMS</h6>
               
    
           <div class="form-section">        
              <h6  style="margin-left: 300px;">Room Charge( <?php echo $days_spent?> days ) : <span style="margin-left: 120px"><?php echo $roomcharge?>/-</span></h6>
              <h6  style="margin-left: 300px; margin-top: 10px;">Doctor Fee : <span style="margin-left: 206px"><?php echo $doctorfee?>/-</span></h6>          
              <h6  style="margin-left: 300px; margin-top: 10px;">Medicine Cost: <span style="margin-left: 186px"><?php echo $medicinecost?>/-</span></h6>   
              <h6  style="margin-left: 300px; margin-top: 10px;">Other Charges: <span style="margin-left: 185px"><?php echo $othercharges?>/-</span></h6>
              <hr class="line">
              <h5  style="margin-left: 300px;  margin-top: 30px;">Total Bill: <span style="margin-left: 200px"><?php echo $totalbill ?>/-</span></h5>
          </div>   

         
    </div> 
    
    
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> 
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