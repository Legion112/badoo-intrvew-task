<?php
$file = fopen(__DIR__ . '/input.txt', 'r');
$map = [];
while(!feof($file)) {
    $latter = fgets($file)[0];
    if(!isset($map[$latter])) {
        $map[$latter] = 1;
    } else {
        $map[$latter]++;
    }
}
ksort($map);
fclose($file);

$file = fopen(__DIR__ . '/output.txt', 'w');
foreach ($map as $latter => $repeat) {
    while($repeat !== 0) {
        $repeat--;
        fwrite($file, $latter . PHP_EOL);
    }
}
fclose($file);
