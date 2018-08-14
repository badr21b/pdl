<?php

/*
$post = [
    'email' => 'admin@kvcodes.com',
    'pwd' => '123',
    'table' => 'users',
    'data'    =>  array('user_fullname' => 'Summa Than', 'password' => md5('password'), 'email' => 'summa@kvcodes.com', 'user_status' => '2')
];
$url = 'http://localhost/rest/Insert';

*/

/*
$post = [
    'email' => 'admin@kvcodes.com',
    'pwd' => '123',
    'table' => 'users',
    'primary_key' => array('id' => 3), 
    'data'    =>  array('user_fullname' => 'Summa edited', 'password' => md5('123'), 'email' => 'second@kvcodes.com', 'user_status' => '1')
];
$url = 'http://localhost/rest/Update';
*/
/*

$post = [
    'email' => 'admin@kvcodes.com',
    'pwd' => '123',
    'table' => 'users',
    'conditions' => array('id' => 1)
];
$url = 'http://localhost/rest/GetRow';
*/

/*
$post = [
    'email' => 'admin@kvcodes.com',
    'pwd' => '123',
    'table' => 'users',
    'column_single' => 'email',
    'conditions' => array('id' => 1),

];
$url = 'http://localhost/rest/GetSingleValue';
*/

/*
$post = [
    'email' => 'admin@kvcodes.com',
    'pwd' => '123',
    'table' => 'users',
    'conditions' => array('user_status' => 1)
];
$url = 'http://localhost/rest/GetAll';
*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
$response = curl_exec($ch); 

var_export($response); 
?>