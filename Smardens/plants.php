<?php
    $database = "caitli26_test";
    $username = "caitli26_caitlin";
    $password = "Summer04291996!";
    $response;
    session_start();
    include 'validateSesh.php';
    $token = $_SESSION['token'];

  
    // Create connection


$mysqli = new mysqli("localhost", $username, $password, $database);

// Check connection


$mysqli->select_db($database) or die( "Unable to select database");

//Logic for updating database based on what post vars were set by the form
if (isset($_POST['dName'])){
    $del = $_POST['dName'];
    $query = "DELETE from Crop where cName='$del' and token='$token'";
    $mysqli->query($query);
}

if(isset($_POST['ecName'])){
    $currentName= $_POST['ecName'];

  
    if(isset($_POST['epNum'])&& $_POST['epNum']!="" && $_POST['epNum']>=0){
        $newNum = $_POST['epNum'];
        $query = " UPDATE Crop SET nPlanted='$newNum' WHERE cName='$currentName' and token = '$token'";
        $mysqli->query($query);
        
    }
    if(isset($_POST['ehNum']) && $_POST['ehNum']!="" &&  $_POST['ehNum'] >=0){
        $newNum = $_POST['ehNum'];
        $query = " UPDATE Crop SET nHarvested='$newNum' WHERE cName='$currentName' and token = '$token'";
        $mysqli->query($query);
        
        
    }
    if(isset($_POST['eName'])&& $_POST['eName']!=""){
        $newName = $_POST['eName'];
        $query = "SELECT * from Crop where cName='$newName' && token='$token'";
        $res = $mysqli->query($query);
        
        if($res->num_rows > 0) {
            $response = "Crop already exists, try another name.";
        }else{
        $query = " UPDATE Crop SET cName='$newName' WHERE cName='$currentName' and token = '$token'";
        $mysqli->query($query);
    }

    }
}
if(isset($_POST['spNum'])&& $_POST['spNum']!="" && $_POST['spNum']>=0 && isset($_POST['shNum']) && $_POST['shNum']!="" && $_POST['shNum']>=0 && isset($_POST['sName']) && $_POST['sName']!="" ){
    $sName = $_POST['sName'];
    $spNum = $_POST['spNum'];
    $shNum = $_POST['shNum'];

    $query = "SELECT * from Crop where cName='$sName' && token='$token'";
    $res = $mysqli->query($query);
    
    if($res->num_rows > 0) {
        $response = "Crop already exists, try another name.";
    }else{
     
        $query = "INSERT INTO Crop (cName, nPlanted, nHarvested,token) VALUES ('$sName', '$spNum', '$shNum','$token')";
        $mysqli->query($query);
 
 }

   
    
}

$query = "SELECT * from Crop where token='$token'";
$result = $mysqli->query($query);



$mysqli->close();
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <link rel="stylesheet" href="css/plants.css">
    <title>Plants</title>
   
    <script src="Js/plants.js"></script>
</head>
<body onload="Scroll();">
    
    <?php include 'nav.php';?>
   
    <section>
    <div class="img-by-txt">
            
            <div>
            <h2 id="header-impact"><?php echo($_SESSION['username']);?>'s Garden</h2>
             <p id="header-text">Keep track of how many crops you have planted and harvested. You can add a new crop by clicking "New Entry" after filling in the information on the same row.
                 If you make a mistake, you can always press the "Edit" button and a row will pop in below the entry with fields that will allow you to change the entry on pressing submit. Additionally,
                 you can delete an entry by pressing the "Delete" button in the row associated with the entry that you would like to get rid of.
             </p>

            </div>
            <div>
                <img id="contentimg" src="image/RandG.jpg">
            </div>
</div>
           
</section>
<section  id="post-header">
             <h2 class="centerHeader">Your Plants</h2>
             <h2><?php echo($response); ?></h2>
             <table>
            <tr>
                <th>Crop Name</th>
                <th>Number Planted</th>
                <th>Harvested (lbs)</th>
                <th></th>
                <th></th>
            </tr>
         

       

                    <?php 
                    // outputs html to display items in database
                        $inc=1;
                          while($row = $result->fetch_assoc()) {
                              echo("
                            <tr>
                            <td>".$row["cName"]."</td>
                            <td>".$row["nPlanted"]."</td>
                            <td>".$row["nHarvested"]."</td>
                            <td><a class='point' onclick='toggleForm(".$inc.")'>Edit</a></td>
                            <td>
                                <form action='plants.php' method='POST'>
            
                                    <input name='dName' type='text' style='display:none;' value='".$row["cName"]."'>
                                    <input type='submit' value='Delete' >
                                </form>
                            </td>
                        </tr>
            
                        <tr   id='form".$inc."' style='display:none;'>
                            <form action='plants.php' onsubmit='return validate(".$inc.")' method='POST'>
                                <td><input id='eName".$inc."' name='eName' type='text' placeholder='Name'></td>
                                <td><input id='epNum".$inc."' name='epNum' type='text' placeholder='Planted'></td>
                                <td><input id='ehNum".$inc."'name = 'ehNum' type='text' placeholder='Harvested'></td>
                                <td><input  type='submit' value='Submit'></td>
                                <td><input name ='ecName' type='text' style='display:none;' value='".$row["cName"]."'></td>
                               
            
                            </form>
                        </tr>");
                    $inc++;
                        }
                 
                    ?>
                   
                       <tr>
                        <form id="newItem" onsubmit="return validate(0)" action='plants.php' method='POST' >
                        
                              
                           <td><input id="eName0" name='sName' type='text' placeholder='Name'></td>
                           <td><input id="epNum0" name='spNum' type='text' placeholder='Planted'  ></td>
                           <td><input id="ehNum0" name ='shNum' type='text' placeholder='Harvested'></td>
                           <td></td>
                           <td> <input  type='submit' value='New Entry'></td>
                        
                        
                        </form>
                     </tr>
                   
                 </table>
    </section>
    <footer>
        <p>contact:iscottgrogin@student.csulb.edu</p>
    </footer>
    
</body>
</html>