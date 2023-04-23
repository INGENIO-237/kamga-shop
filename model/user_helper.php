<?php

require_once("../model/user_data.php");
require_once("../model/db.php");

// Old users dummy data

// function get_users_data(){
//     return $GLOBALS['login_a'];
// }

function log_user_in($login, $pwd){
    
    // Old dummy data
    
    // $users = get_users_data();
    // for($i = 0; $i < count($users); $i++){
    //     if($users[$i]['login'] == $login && $users[$i]['password'] == $pwd){
    //         return $users[$i];
    //     }
    // }
    // return false;

    $pass = md5($pwd);

    $stmt = $GLOBALS['db']->query("SELECT * FROM t_user WHERE login_use ='$login' AND mdp_use = '$pass'");
    $result = $stmt->fetchAll();

    if(count($result) > 0){
        return $result;
    }else{
        return false;
    }

}

?>