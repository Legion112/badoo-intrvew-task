<?php
$file = fopen(__DIR__ . '/input.txt', 'r');
$map = [];
while(!feof($file)) {
    $letter = fgets($file)[0];
    if(!isset($map[$letter])) {
        $map[$letter] = 1;
    } else {
        $map[$letter]++;
    }
}
ksort($map);
fclose($file);

$file = fopen(__DIR__ . '/output.txt', 'w');
foreach ($map as $letter => $repeat) {
    while($repeat !== 0) {
        $repeat--;
        fwrite($file, $letter . PHP_EOL);
    }
}
fclose($file);
