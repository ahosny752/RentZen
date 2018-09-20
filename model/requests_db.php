<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function addRequest($teacher_id,$room,$problem_type_id,$comment){
    global $db;
    $sql = "INSERT INTO `requests`(`teacher_id`, `avtech_id`, `room`, `problem_type_id`, `status`, `comments`) VALUES "
            . " (?, null, ?, ?, 'In Progress', ?)";
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$teacher_id);
    $statement->bindValue(2,$room);
    $statement->bindValue(3,$problem_type_id);
    $statement->bindValue(4,$comment);
    $success = $statement->execute();
    $last_id = $db->lastInsertId();
    
    //got the last id - now let's make it pretty
    $confirmation = '000000000' . $last_id;
    $confirmation = substr($confirmation,-9);
    $confirmation = 'T' . $confirmation;
    
    //time to put that pretty confirmation id in the database
    $sql = 'update `requests` set confirmation = ? where request_id = ?';
    $statement = $db->prepare($sql);
    $statement->bindValue(1,$confirmation);
    $statement->bindValue(2,$last_id);
    $success = $success && $statement->execute();
    
    $statement->closeCursor();
    
    //ok - what should i return??
    if ($success == true){
        $result = $confirmation;  //for example: T000000010
    } else {
        $result = false;
    }
    
    //result is confirmation number on success, false on error
    return $result;
}

function getRequests($status){
    global $db;
    $sql = "SELECT * FROM `requests`, `people`, `problem_types` "
            . " WHERE `status` = :status and `teacher_id` = `people_id` "
            . " and requests.problem_type_id = problem_types.problem_type_id "
            . " order by lastname, firstname";
    $statement = $db->prepare($sql);
    $statement->bindValue(':status',$status);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
   
    $statement->closeCursor();
    //result is the array of results
    return $result;    
}

function closeRequest($request_id,$avtech_id){
    global $db;
    $sql = "UPDATE `requests` SET status = 'Resolved', "
            . " `avtech_id` = :avtech_id WHERE request_id = :request_id";
    $statement = $db->prepare($sql);
    $statement->bindValue(':avtech_id',$avtech_id);
    $statement->bindValue(':request_id',$request_id);
    $result = $statement->execute();
    $statement->closeCursor();
    
    //result is true on success, false on error
    return $result;
}

function getRequestTypes(){
    global $db;
    $sql = "select * from problem_types order by display_order, problem_type_text";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    
    //result is the array of results
    return $result;
}

function getRandomRequest($status){
    global $db;
    $sql = "SELECT * FROM requests, people, problem_types "
            . " WHERE `status` = :status and `teacher_id` = `people_id` "
            . " and requests.problem_type_id = problem_types.problem_type_id "
            . " order by lastname, firstname";
    $statement = $db->prepare($sql);
    $statement->bindValue(':status',$status);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    $count = count($result);
    $key = mt_rand(0, $count - 1);

        
    $statement->closeCursor();
    //result[$key] is a randomly select  record from our array of results
    return $result[$key];    
}
?>