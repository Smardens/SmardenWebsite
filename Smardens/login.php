<?php 

$database = "caitli26_test";
$username = "caitli26_caitlin";
$password = "Summer04291996!";
$account_name = $_POST["name"];
$account_pass = $_POST["pass"];
$feedback;
// Create connection


$mysqli = new mysqli("localhost", $username, $password, $database);

// Check connection


$mysqli->select_db($database) or die( "Unable to select database");

//Check users credentials
if($account_name !="" && $account_pass!=""){
$query = "SELECT * from User_Validate WHERE User_Name ='$account_name' and Password='$account_pass'";
$result = $mysqli->query($query);

if($result->num_rows > 0) {
    session_start();
    $_SESSION['username']=$account_name;
    while($row = $result->fetch_assoc()) {
        $_SESSION['token'] = $row['Token'];
    }
    
    header("Location: home.php");
    exit;
}else{$feedback = "Account not found, please sign up.";}

}
$mysqli->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="Js/login.js"></script>
    <title>Login</title>
    
</head>
<body>
    <div id="bg">
        <h2 style="color:brown;"><?php echo($feedback); ?></h2>
        <h1>Smardens Login</h1>
        <hr><br><br>
        <form action="login.php" onsubmit="return validate();" method="post">
            <input id="username" type="text" name="name" placeholder="Username"><br><br>
            <input id="pass" type="password" name="pass" placeholder="Password"><br> <br><br>
            <a href="signup.php">Create Account</a><input type="submit" align="right">
    </div>
</form>
</body>
</html>
