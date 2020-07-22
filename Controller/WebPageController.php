
<?php

$data = array();

mainFunction($data);

function mainFunction (&$data) { 
    $function = "login";
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action; 
    }
    $function($data);  
}

function login (&$data) {
    $data['page'] = "auth/login";
}

function checkLogin (&$data) {
    dashboard($data);
}

function logout (&$data) {
    $data['page'] = 'auth/login';
}

function dashboard (&$data) {
    $data['page'] = 'dashboard/index';
}

function carList (&$data) {
    $data['page'] = 'carList/index';
}

function customerList (&$data) {
    $data['page'] = 'customerList/index';
}

function bookingList (&$data) {
    $data['page'] = 'bookingList/index';
}
