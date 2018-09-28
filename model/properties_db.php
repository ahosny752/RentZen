<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        
        
   function addProperty($property_id, $street, $city, 
                $state_id){
    global $db;
    $sql = "INSERT INTO `property`(`property_id`, `street`, `city`, `state_id`,`zip`, `beds`, `baths`, `sqft`, `type_id`, `propstat_id`,`income_requirement`, `credit_requirement`, `rental_fee`, `description`,`picture` VALUES "
            . " (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, null)";
    $statement = $db->prepare($sql);
    //$statement->bindValue(1,$property_id);
    $statement->bindValue(1,$street);
    $statement->bindValue(2,$city);
    $statement->bindValue(3,$state_id);
    $statement->bindValue(4,$zip);
    $statement->bindValue(5,$beds);
    $statement->bindValue(6,$baths);
    $statement->bindValue(7,$sqft);
    $statement->bindValue(8,$type_id);
    $statement->bindValue(9,$propstat_id);
    $statement->bindValue(10,$income_requirement);
    $statement->bindValue(11,$credit_report);
    $statement->bindValue(12,$rental_fee);
    $statement->bindValue(13,$description);
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
    $properties = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $properties;    
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