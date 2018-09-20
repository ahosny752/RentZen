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
?>