<?php
include '../config/configDB.php';

function getSenddata($sql) {
    
    $result = $conn->query($sql);
    $i=1;
    $results = array();
    while ($row = mysqli_fetch_object($result)) {
        array_push($results, $row);
    }
    return $results;
}