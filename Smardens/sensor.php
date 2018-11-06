<?php 
    session_start();
    include 'validateSesh.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <link rel="stylesheet" href="css/sensor.css">
    <title>Home</title>
    <style>

      
    </style>
    <script src="Js/sensor.js"></script>
</head>
<body>
    
    <?php include 'nav.php';?>
   
    
    <section>
    <div class="img-by-txt">

        <div>
    <h2 id="header-impact">Hello <?php echo($_SESSION['username']);?> </h2>
             <p id="header-text">Check the status of your sensors. We use the output of a sensor to determine if something is likely wrong. If a sensor test fails, we advise that you go 
                 and check on your garden. To run the test, simply click the button that says "Check Sensors".
             </p>
</div>
<div>
                <img id="contentimg" src="image/soilMst.jpg">
            </div>
</div>
</section>
<section  id="post-header">
    
             
                  
                  
               
             
            <h2 class="centerHeader">Sensor Status</h2>

                <div class="contentText">  
                    <h3 id="temp">Temp:</h3>
                    <h3 id = "hum">Humid:</h3>
                    <h3 id = "uv">UV:</h3>
                    <input type="submit" onclick="sCheck();" value='Check Sensors' >

                </div>

            </div>
           
                  
    </section>
    <footer>
        <p>contact:iscottgrogin@student.csulb.edu</p>
    </footer>
    
</body>
</html>