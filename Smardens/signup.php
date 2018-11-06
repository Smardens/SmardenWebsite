<?php 

$database = "caitli26_test";
$username = "caitli26_caitlin";
$password = "Summer04291996!";
$account_name = $_POST["name"];
$account_pass = $_POST["pass"];
$account_tok = $_POST["tok"];

$accountStatus;
// Create connection


$mysqli = new mysqli("localhost", $username, $password, $database);

// Check connection


$mysqli->select_db($database) or die( "Unable to select database");

if($account_name !="" && $account_pass!="" && $account_tok !=""){
$query = "SELECT * from User_Validate WHERE User_Name ='$account_name'";

    $result = $mysqli->query($query);
    
    if($result->num_rows > 0) {
        $accountStatus = "Account already exists, sign in or try signing up again.";
    }else{
     
     $query = "INSERT INTO User_Validate (User_Name, Password, Token) VALUES ('$account_name', '$account_pass', '$account_tok')";
     $mysqli->query($query);
     $accountStatus = "Account created, please sign in.";
 
 }
}



$mysqli->close();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
    <script src="Js/signup.js"></script>
    <title>Sign-up</title>
</head>
<body>
    <div>
        <h2 style="color:brown;"><?php echo($accountStatus);?> </h2>
        <h1>Sign-up</h1>
        <hr><br><br>
        <form action="signup.php" onsubmit="return validate()" method="post">
            <input id = "username" type="text" name="name" placeholder="Username"><br><br>
            <input id="pass" type="password" name="pass" placeholder="Password"><br> <br>
            <input id="tok" type="text" name="tok" placeholder="Token"><br><br><br>
            <a href="login.php">Log-in</a>
            <input type="submit" align="right">
       
    </div>
</form>
</body>
</html>