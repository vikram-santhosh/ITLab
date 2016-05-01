<?php
    session_start();

    echo "Getting Session Variables";
    
    echo $_SESSION['master']."<br>";
    echo $_SESSION['pi'];
?>