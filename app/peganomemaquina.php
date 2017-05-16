<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;

$ip = gethostbyname('localhost');
echo '<p>';

echo $ip;
