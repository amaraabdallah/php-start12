<?php
require_once '../common/auth.php';
require_once './utils.php';

// Takes raw data from the request
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);

if(!(isset($data->password) && (isset($data->username) || isset($data->adminusername)))){
    send_json([
        "success" => false,
        "error" => "Bad input"
    ]);
    exit;
}





if(do_login($data->username, $data->password)){
    send_json([
        "success" => true,
        "username" => $data->username
    ]);
}else if(do_login($data->adminusername, $data->password)){
    send_json([
        "success" => true,
        "username" => $data->adminusername
    ]);
}else{
    send_json([
        "success" => false,
         ]);
}


/*
// login Admin
if(!isset($data->adminusername) || !isset($data->password)){
    send_json([
        "success" => false,
        "error" => "Bad input"
    ]);
    exit;
}

if(do_login($data->adminusername, $data->password)){
    send_json([
        "success" => true,
        "username" => $data->username
    ]);
}else{
    send_json([
        "success" => false,
         ]);
    // Inutile en Web 2.0 : redirect_to($do_login);
}*/