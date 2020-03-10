<?php

function error_res($msg) {
    ///////////ERROR RESPONSE 
    $msg = $msg == "" ? "Error" : $msg;
    return array("status" => 0, "msg" => $msg);
}

function success_res($msg) {
    ////////// SUCCESS RESPONSE
    $msg = $msg == "" ? "Success" : $msg;
    return array("status" => 1, "msg" => $msg);
}

function check_login() {
    /////////// CHECK PARAMETER USER_ID SET IN CODEIGNTER SESSION
    //////////// CODIGNATER SESSION IS NOT SESSTION OF PHP..CODEIGNATER USE COKIE FOR SESSTION 
    $CI = & get_instance();
    $user_id = $CI->session->userdata('user_id');
    return $user_id;
}

function generateRandomString($length = 2) {
    ///////////GET RAMNDOM STRING FROM BELOW STRING
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function generate_forget_token($length = 2) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

function encrypt_string($string) {
    $key = "c91301c731a55b06f843e1bcebd31f22";
    $result = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) + ord($keychar));
        $result.=$char;
    }
    return base64_encode($result);
}

function decrypt_string($string) {
    $key = "c91301c731a55b06f843e1bcebd31f22";
    $result = '';
    $string = base64_decode($string);

    for ($i = 0; $i < strlen($string); $i++) {
        $char = substr($string, $i, 1);
        $keychar = substr($key, ($i % strlen($key)) - 1, 1);
        $char = chr(ord($char) - ord($keychar));
        $result.=$char;
    }
    return $result;
}

function ios_push_notification($device_token, $message_array) {
    //$deviceToken = "f479e13b3411c7217a553250fe4782123ba38cae565b02762e64967a2e0ae509";
    $deviceToken = "" . $device_token . "";
//   $deviceToken = "81a6a7389029fb7064f6bbd8adb0e2e48881473ddb1bc70339bd88e506713e76";
//device token of ios device
    $passphrase = 'studopoly';
//// pass phrase of ios certificate
    $ctx = stream_context_create();
    stream_context_set_option($ctx, 'ssl', 'local_cert', 'ck.pem');
    stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
///ck.pem is certificate of ios application
// Open a connection to the APNS server
    $fp = stream_socket_client(
            'ssl://gateway.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);
    if (!$fp)
        $error = "Failed to connect: $err $errstr" . PHP_EOL;
//// For development app :ssl://gateway.sandbox.push.apple.com:2195
///  For production  app :ssl://gateway.push.apple.com:2195
//$body['aps'] = $message_body;
//echo 'Connected to APNS' . PHP_EOL;
// Create the payload body
    $body['aps'] = $message_array;
// Encode the payload as JSON
    $payload = json_encode($body);
// Build the binary notification      
    $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
// Send it to the server
    $result = fwrite($fp, $msg, strlen($msg));
    fclose($fp);
   // $error = PHP_EOL;

    if (!$result) {
        //echo 'Error, notification not sent' . PHP_EOL;
        $return = "Error, notification not sent :" . $error;
    } else {
        $return = "Success, notification sent :" . $error;
    }
    return $return;
}
