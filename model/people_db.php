<?php



function loginPeople($username,$password,$role_id){
    //returns true if the username and password are a good match.  false if not
    global $db;
    $statement = $db->prepare('select people_id from people '
            . 'where username = :username and password = :password and role_id = :role_id');
    $statement->bindValue(':username',$username);
    $statement->bindValue(':password',$password);
    $statement->bindValue(':role_id',$role_id);
    $statement->execute();
    $array = $statement->fetch();
    $statement->closeCursor();
    if (empty($array['people_id'])){
        $result = false;
    } else
    {
        $result = $array['people_id'];
    }
    return $result;    
}


function getPeople($role_id){
    //returns an array of people
    global $db;
    $statement = $db->prepare('select people_id, firstname, lastname, '
            . ' username from people where role_id=:role_id '
            . ' order by lastname, firstname');
    $statement->bindValue(':role_id',$role_id);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    if (empty($result)){
        $result = false;
    } 
    return $result;
}


function isAdmin($person_id){
    
    //i want this function to return Y or N or false (for error)
    
    global $db;
    $statement = $db->prepare('select role_id from people where people_id = ?');
    $statement->bindValue(1,$person_id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    if (empty($result)){
        $result = false;
    } 
    return $result['admin'];
}

function getPeopleRole($role ){
    //returns an array of people
    global $db;
    $statement = $db->prepare('select role from people, people_role '
            . 'where role = :role');
    $statement->bindValue(':role',$role);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    if (empty($result)){
        $result = false;
    } 
    return $result;
}



?>