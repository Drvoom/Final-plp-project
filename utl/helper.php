<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/conn_db.php';

function sendResp($status, $message)
{
die(json_encode(array('status' => $status, 'message' => $message)));
}




