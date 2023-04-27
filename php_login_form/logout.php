<?php 
session_start();
session_destroy();
header('Location: sign_up_form.php');
?>