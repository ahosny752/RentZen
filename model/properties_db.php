<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        
        
   function addProperty($property_id, $street, $city, 
                $state_id){
    global $db;
    $sql = "INSERT INTO `property`(`property_id`, `street`, `city`, `state_id`) VALUES "
            . " (?, ?, ?, ?)";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$property_id);
    $statement->bindValue(2,$street);
    $statement->bindValue(3,$city);
    $statement->bindValue(4,$state_id);
    $statement->execute();
    $last_id = $db->lastInsertId();
    $statement->closeCursor();
    
}



function getAllProperties($city){
    global $db;
    $sql = "SELECT * FROM `property`";
    $statement = $db->prepare($sql);
    $statement->bindValue(':city',$city);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}



function closeProperties($property_id){
    global $db;
    $sql = "DELTETE `requests` SET status = 'Resolved', "
            . " `avtech_id` = :avtech_id WHERE request_id = :request_id";
    $statement = $db->prepare($sql);
    $statement->bindValue(':avtech_id',$avtech_id);
    $statement->bindValue(':request_id',$request_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}
?>