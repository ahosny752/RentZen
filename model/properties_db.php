<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
   function addProperty($property_id, $street, $city, 
                $state_id,$zip, $beds, $baths, 
                $sqft,$type_id, $propstat_id, $income_requirement, 
                $credit_requirement,$rental_fee, $description, $picture){
    global $db;
    $sql = "INSERT INTO `property`(`property_id`, `street`, `city`, `state_id`,`zip`, `beds`, `baths`, `sqft`, `type_id`, `propstat_id`,`income_requirement`, `credit_requirement`, `rental_fee`, `description`,`picture`) VALUES "
            . " (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $db->prepare($sql);
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
    $statement->bindValue(11,$credit_requirement);
    $statement->bindValue(12,$rental_fee);
    $statement->bindValue(13,$description);
    $statement->bindValue(14,$picture);
    $success = $statement->execute();
    $last_id = $db->lastInsertId();
   
    $confirmation = '000000000' . $last_id;
    $confirmation = substr($confirmation,-9);
    $confirmation = 'T' . $confirmation;
    
    $statement->closeCursor();
    
    //ok - what should i return??
    if ($success == true){
        $result = $confirmation;  //for example: T000000010
    } else {
        $result = false;
        
    }
    return $result;
  }
function getAllProperties(){
    global $db;
    $sql = "SELECT * FROM `property`";
    $statement = $db->prepare($sql);
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



function editProperty($property_id, 
        $street, $city, $state_id, $zip, $beds, 
        $baths, $sqft, $type_id, $propstat_id, $income_requirement, $credit_requirement, $rental_fee, $description, $picture){

    global $db;
    $statement = $db->prepare('update property set '
            . ' street = ?, city = ?, state_id = ?, zip = ?, beds = ?, baths = ?, sqft = ?, type_id = ?, propstat_id = ?, income_requirement = ?, rental_fee = ?, description = ?, picture = ? where property_id = ?');
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
    $statement->bindValue(11,$credit_requirement);
    $statement->bindValue(12,$rental_fee);
    $statement->bindValue(13,$description);
    $statement->bindValue(14,$picture);
    $success = $statement->execute();
    $statement->closeCursor();
    
    return $success;    
}
?>