<?php
    //Makes sure that a user has a valid session to view a page
    if($_SESSION['token']=="" || !isset($_SESSION['token'])){
            header("Location: logout.php");
            exit;
        }
?>