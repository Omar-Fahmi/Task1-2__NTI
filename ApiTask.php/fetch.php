<?php
    require 'db.php';

    $json_url = "https://wikimedia.org/api/rest_v1/metrics/pageviews/per-article/en.wikipedia/all-access/all-agents/Tiger_King/daily/20210901/20210930";
    $json_data = file_get_contents($json_url);

    $items = json_decode($json_data,true);

    foreach ($items as $item) {
        # code...
        $sql = "INSERT INTO `api`(`project`, `article`, `granularity`, timestamp, `access`, `agent`, `views`)
         VALUES ('".$item["project"]."','".$item["article"]."','".$item["granularity"]."','".$item["timestamp"]."','".$item["access"]."','".$item["agent"]."','".$item["views"]."')";
        
        $op  = mysqli_query($con, $sql);
        if ($op) {
            echo "Success";
        } else {
            echo "Failed , " . mysqli_error($con);
        }                
    }

?>