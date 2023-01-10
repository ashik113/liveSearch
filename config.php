<?php

    $conn = mysqli_connect("localhost", "root", "", "storedb");
    if(!$conn){
        echo "Connection Failed ".mysqli_connect_error();
    }

?>