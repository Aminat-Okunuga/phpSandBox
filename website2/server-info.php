<?php
# $_SERVER SUPER GLOBAL

// Create server array
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],    //root of your website
    'Current Page' => $_SERVER['PHP_SELF'],  //current page
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute PAth' => $_SERVER['SCRIPT_FILENAME'],  //the absolute path
];
echo $server['Host Server Name'];
// Create client array
$client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Client Remote Port' => $_SERVER['REMOTE_PORT'],
];

print_r($client);

?>