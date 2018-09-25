---
ID: 30
post_title: myGarden
author: Smardens
post_excerpt: ""
layout: page
permalink: https://smardens.com/mygarden/
published: true
post_date: 2018-04-11 20:39:43
---
[insert_php]


$database = "User_Validate";
$username = "caitli26_caitlin";
$password = "Summer04291996!";

// Create connection
$mysqli = new mysqli("localhost", $username, $password, $database);
// Check connection
$mysqli->select_db($database) or die( "Unable to select database");
echo ("Connected successfully");
$mysqli->close();

[/insert_php]

<div class="login-page">
<div class="form">
<form class="register-form">
<label>Username:          </label><input type="text" placeholder="Enter Username" id="usernamereg" required>
<label>Password:           </label><input type="password" placeholder="Enter Password" id="passwordreg" required>
<label>Easy IoT token:</label><input type="text" placeholder="Easy IoT token" id="easyTokenreg" required>
<button>create</button>
</form>
<form class="login-form">
<label>Username:          </label><input type="text" placeholder="username" id="username" required>
<label>Password:           </label><input type="password" placeholder="password" id="password" required>
<button onclick="validate()"/>Login</button></form></div>
</div>