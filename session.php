<?php
session_start();
$data = $_POST;
$uri = "http://api.jige.olege.com/user/accesstoken";
$return = comm($uri, $data);

$rt = json_decode($return);
if ($rt->data->id != 0) {
	$_SESSION['uid'] = $rt->data->id;
	$user = comm('http://api.jige.olege.com/user?id='.$_SESSION['uid']);
	$u = json_decode($user)->data;
	$_SESSION['user'] = serialize($u);
	echo $_SESSION['uid'];
}

function comm($uri, $data = array(), $method = 'post'){
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $uri );
    if ($method === 'post'){
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
    }
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    $return = curl_exec ( $ch );
    curl_close ( $ch );
    return $return;
} 
