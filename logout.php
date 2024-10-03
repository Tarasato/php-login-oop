<?php 

    include("config/Database.php");
    include("class/UserLogin.php");

    $connectDB = new Database();
    $db = $connectDB->getConnection();

    $user = new UserLogin($db);
    $user->logout();

?>