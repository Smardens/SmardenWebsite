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

    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
    <style>


    </style>
</head>

<body>


    <!--Nav bar elements to be included in pages  -->
  
    <?php include 'nav.php';?>
   
   <section>
            
        <h2 id="header-impact">Hello <?php echo($_SESSION['username']);?>  </h2>

        <p id="header-text">Our world has a finite amount of resources that are being depleted daily and without preemptive action, 
            we will fail to sustain these resources for future generations. Freshwater is one of these finite resources that is becoming scarce,
             yet the United States still uses more water per capita than anywhere else in the world. In order to maintain sustainable usage, Smardens is 
            at the forefront of this solution by marrying technology and environmental sustainability.
        </p>
    </section>
    <section class="rightalign">
        <h2 class="rightalignHeader">Smart Gardening</h2>
        <p>In order to address this issue, The Resilient Smart Garden Project aims to build a user-friendly system to monitor crops and maximize irrigation performance, combining principles in both efficiency and permaculture.  
                    Our automated watering system will collect data to help suggest methods to maximize the growth and yield while minimizing irrigation, time, and costs. It consists of small and light-weight hardware that is powered by solar energy and uses drip irrigation methods. 
                    The developed system will utilize an Arduino board along with multiple sensors to read the water levels in the garden environment and log that data to a database.
                     The amount of watering depends on the humidity in the soil along with the amount of light and the temperature of the environment. Automated efficiency checks will then suggest watering schedules based on the layout of the garden and the specific plants within it.
 </p>
    </section>

    <section id="post-header">
        <div class="img-by-txt">
            
            <div>
                <h2 class="contentHeader">Conserve</h2>

                <p class="contentText">
                In a drought-prone Southern California, being able to implement a system like this is pivotal for the conservation of one of our most vital resources, water. 
                Users from all levels of gardening skill will be able to implement this system and successfully grow a wide variety of vegetation and crops while doing their part to conserve the most amount of water as possible while gardening.
                </p>

            </div>
            <div>
                <img id="contentimg" src="image/hands.jpg">
            </div>

        </div>
        <button id ="quiz"><a href="quiz.html">Quiz</a></button>
    </section>


    <footer>
        <p>contact:iscottgrogin@student.csulb.edu</p>
    </footer>

</body>

</html>