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

    <link rel="stylesheet" href="css/graph.css">
    <title>Graphs</title>
    <style>

      
    </style>

    <!-- Lib for drawing graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/p5.js"></script>
    <!-- Sketch that draws graph -->
    <script src="Js/sketch.js"></script>

       
  
</head>
<body>
    
    <?php include 'nav.php';?>
   
    <section>
    <div class="img-by-txt">
            
            <div>
           
             <h2 id="header-impact"><?php echo($_SESSION['username']);?>'s Graphs</h2>
             <p id="header-text">View your sensor data. To check the measurements from your sensors, click on the button associated with the data you would like to see.</p>

            </div>
            <div>
            <img src="image/flr.jpg" alt="">
            </div>
</div>
   
             
                   
                 
    </section>
    <section   id="post-header">
    <h2 class="centerHeader">Data</h2>
  

    <div id="sketch-holder">
    <div class = "btns">

             
<input type="submit"  onclick='changeGraph("temp")' value="Temp" >
<input type="submit"  onclick='changeGraph("hum")' value="Humidity" >
<input type="submit"  onclick='changeGraph("uv")' value="UV" >
</div>
      <!-- Our sketch will go here!, the div is needed to change the graphs location -->
    </div>
    </section>
    <footer>
        <p>contact:iscottgrogin@student.csulb.edu</p>
    </footer>
    
</body>
</html>