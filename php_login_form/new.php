<?php 
session_start();
if(isset($_SESSION['name'])){
    echo '<h1> Welcome'. $_SESSION['name'] . '</h1>';
    echo '<a href="logout.php">Logout</a>';
}
else{
    echo 'Your name is not available';
    echo '<a href="logout.php">Logout</a>';
}
?>