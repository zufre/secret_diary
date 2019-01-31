<?php

    $link = mysqli_connect("localhost", "root", "#######", "notebook");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>