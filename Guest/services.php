<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avocado Medical Centre | Services</title>
    <script src="2-bmi.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    <link rel="stylesheet" type="text/css"href="services.css">
</head>
<body>


<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="mission.php">Mission Statement</a></li>
  <li><a href="aboutUs.php">About Us</a></li>
  <li><a class="active" href="services.php">Services</a></li>
  <li><a href="appointment.php">Appiontment</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>

    
    <div class="section2">
       <h1 class="services">Services</h1>
       <div class="box">
           
            <div class="boxes">
                <h1>Blood Tests</h1>
                <img src="../Images\blood-tube.png" class="serviceImg"> 
                <h2 class="serviceLabel">We offer a variety of blood tests such as:</h2>
                <h2>HDL</h2>
                <h2>ABO</h2>
                <h2>ACTH</h2>
           </div>
           
           <div class="boxes">
                <h1>X-Ray</h1>
                <img src="../Images\x-ray.png" class="serviceImg"> 
                <h2 class="serviceLabel"> We offer a variety of X-Ray scans are:</h2>
                <h2>CT Scans</h2>
                <h2>Mammographs</h2>
                <h2>Fluoroscopy</h2>
           </div>

           <div class="boxes">
                <h1>Doctor Visits</h1>
                <img src="../Images\doctor.png" class="serviceImg"> 
                <h2 class="serviceLabel"> Our Doctors are state of the art</h2>
                <h2>Podiatrist</h2>
                <h2>General Practictioner</h2>
                <h2>Pediatrician</h2>
           </div>

           <div class="boxes">
                <h1>OB/GYN</h1>
                <img src="../Images\pelvic-area.png" class="serviceImg"> 
                <h2 class="serviceLabel"> Our OB/GYN Services are:</h2>
                <h2>Screening Mammogram</h2>
                <h2>Diagnostic Mammogram</h2>
                <h2>Child Birth Check Ups</h2>
           </div>
           </div>

           <form onsubmit="return calcBMI();" class="BMICal">
               System:
               <label>
               <input type="radio" id="bmi-metric" name="bmi-measure" onchange="measureBMI()" checked/> Metric
               </label>
               <label>
               <input type="radio" id="bmi-imperial" name="bmi-measure" onchange="measureBMI()"/> Imperial
               </label>
               <br><br>

               Weight:
               <input id="bmi-weight" type="number" min="1" max="635" required/> 
               <span id="bmi-weight-unit">KG</span>
               <br><br>

               Height:
               <input id="bmi-height" type="number" min="54" max="272" required/>
               <span id="bmi-height-unit">CM</span>
               <br><br>

               <input type="submit" value="Calculate BMI" class="calButton"/>
               <div id="bmi-results"></div>
            </form>

      
    </div>
</body>
</html>