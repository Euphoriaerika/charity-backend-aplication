<?php

header("Content-type: json/application");

require 'ConnectToDB.php';

$type = $_GET['q'];

if($type === 'volounteers'){
    $volounteers = mysqli_query($conn,"SELECT * FROM heroku_00fb7a2965fdb12.volonteer_info");

    $volounteers_list = [];

    while($volounteer = mysqli_fetch_assoc($volounteers)){
        $volounteers_list[] = $volounteer;
    }

    echo json_encode($volounteers_list);
}



?>