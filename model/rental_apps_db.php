  <?php
function addApplication($rental_application_id ,$renterproperty_id, $last_status_id, 
                $first_name,$last_name, $phone, $email, 
                $income, $credit_score, $move_in_date, $move_out_date, 
                $renter_message, $status){
    global $db;
    $sql = "INSERT INTO `rental_application`(`rental_application_id`, `renterproperty_id`, `last_status_id`, `first_name`,`last_name`, `phone`, `email`, `income`, `credit_score`, `move_in_date`,`move_out_date`, `renter_message`, `status`) VALUES "
            . " (null, null, null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$first_name);
    $statement->bindValue(2,$last_name);
    $statement->bindValue(3,$phone);
    $statement->bindValue(4,$email);
    $statement->bindValue(5,$income);
    $statement->bindValue(6,$credit_score);
    $statement->bindValue(7,$move_in_date);
    $statement->bindValue(8,$move_out_date);
    $statement->bindValue(9,$renter_message);
    $statement->bindValue(10,$status);
    $success = $statement->execute();
    $last_id = $db->lastInsertId();
   
    $confirmation = '000000000' . $last_id;
    $confirmation = substr($confirmation,-9);
    $confirmation = 'A' . $confirmation;
    
    $statement->closeCursor();
    
    //ok - what should i return??
    if ($success == true){
        $result = $confirmation;  //for example: T000000010
    } else {
        $result = false;
        
    }
    return $result;
  }
  
  
  
  
  function getAllApplications(){
    global $db;
    $sql = "SELECT * FROM `rental_application`";
    $statement = $db->prepare($sql);
    $statement->execute();
    $application = $statement->fetchAll();
    $statement->closeCursor();
    //result is the array of results
    return $application;    
}


function getApplication($rental_application_id){
    global $db;
    $sql = "SELECT * FROM `rental_application` WHERE rental_application_id = ?";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$rental_application_id);
    $statement->execute();
    $application = $statement->fetch();
    $statement->closeCursor();
    //result is the array of results
    return $application;    
}



function acceptRentalApp($rental_application_id,$renterproperty_id){
    global $db;
    $sql = "UPDATE `rental_application` SET status = 'Approved', "
            . " `renterproperty_id` = :renterproperty_id WHERE rental_application_id = :rental_application_id";
    $statement = $db->prepare($sql);
    $statement->bindValue(':renterproperty_id',$renterproperty_id);
    $statement->bindValue(':rental_application_id',$rental_application_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}
  ?> 