<?php
include "dbconfig.php";

if ((!empty($_POST)) && isset($_POST['optionId'])) {
    // Assigning values to the variable  
    $optionId =  $_POST['optionId'];

    // Insert new record into the "polls" table 
    $stmt = $conn->prepare("UPDATE vote_count SET count = count + 1 WHERE id = ?");
    $stmt->execute([$optionId]);

    $stmt = $conn->prepare("SELECT poll_id FROM vote_count WHERE id = ?");
    $stmt->execute([$optionId]);
    $poll_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $poll_id  = $poll_id[0]["poll_id"];
     
    header("Location: result.php?id=$poll_id");
    die();
    
}else{
    // $previous = $_SERVER['HTTP_REFERER'];
    
    header("location:javascript://history.go(-1)");
}
?>