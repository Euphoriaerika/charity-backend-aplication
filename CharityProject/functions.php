<?php

function getVolounteers($conn){
    $volounteers = mysqli_query($conn,"SELECT * FROM heroku_00fb7a2965fdb12.volonteer_info");

    $volounteers_list = [];

    while($volounteer = mysqli_fetch_assoc($volounteers)){
        $volounteers_list[] = $volounteer;
    }

    echo json_encode($volounteers_list);
}

function getVolounteer($conn,$id){
    $volounteer = mysqli_query($conn, "SELECT * FROM heroku_00fb7a2965fdb12.volonteer_info WHERE VolounteerID = '$id'");

    if(mysqli_num_rows($volounteer) === 0){
        $res = [
            "status" => false,
            "message" => "Volounteer not found" 
        ];
        echo json_encode($res);
    }else{
        $volounteer = mysqli_fetch_assoc($volounteer);
        echo json_encode($volounteer);
    }
}

?>