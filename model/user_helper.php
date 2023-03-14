<?php

require_once("../model/user_data.php");

function get_users_data(){
    return $GLOBALS['login_a'];
}

function check_login($login, $pwd){
    $users = get_users_data();
    for($i = 0; $i < count($users); $i++){
        if($users[$i]['login'] == $login && $users[$i]['password'] == $pwd){
            return true;
        }
    }
    return false;
}

?>