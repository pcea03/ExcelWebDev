<?php
$server=[
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];

/* echo $server['Host Server Name']."<br>";
echo $server['Host Header']."<br>";
echo $server['Server Software']."<br>";
echo $server['Document Root']."<br>";
echo $server['Current Page']."<br>";
echo $server['Script Name']."<br>";
echo $server['Absolute Path']."<br>";
*/

$client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_PORT'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
];
/*
echo $client['Client System Info']."<br>";
echo $client['Client IP']."<br>";
echo $client['Remote Port']."<br>";
*/

?>