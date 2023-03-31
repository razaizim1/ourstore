<?php   
function InputCount($col,$value){
    global $connection;
    $stm = $connection->prepare("SELECT $col FROM users WHERE $col=?");
    $stm->execute(array($value));
    $count=$stm->rowCount();

    return  $count;
}

// function getAdmin($id,$col){
//     global $connection;
//     $stm=$connection->prepare("SELECT $col FROM admins WHERE id=?");
//     $stm->execute(array($id));
//     $result=$stm->fetch(PDO::FETCH_ASSOC);
//     return $result[$col];
// }
 