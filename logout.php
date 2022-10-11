<?php

session_start();

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

echo "<script>
    alert('Logout Successful!');
    window.location.href='index.php'; 
    </script>";
    die;
   

?>