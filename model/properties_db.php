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
            . " (null, ?, ?, ?)";
    $statement = $db->prepare($sql);
    //$statement->bindValue(1,$property_id);
    $statement->bindValue(1,$street);
    $statement->bindValue(2,$city);
    $statement->bindValue(3,$state_id);
    $statement->execute();
    $last_id = $db->lastInsertId();
    $statement->closeCursor();
    
    return $last_id;
    
}



function getAllProperties($city){
    global $db;
    $sql = "SELECT * FROM `property` where city = ?";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$city);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}


function getProperty($property_id){
    global $db;
    $sql = "SELECT * FROM `property` WHERE property_id = ?";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$property_id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}



function closeProperties($property_id){
    global $db;
    $sql = "DELETE FROM `property` WHERE property_id = ?";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$property_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}
?>