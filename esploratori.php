<?php
$fp = @fopen('esploratori.txt', "r");
if (!$fp) exit;
echo $fp;
$names = [];
$birthdates = [];
for ($count = 0; ($buffer = fgets($fp)) !== false; $count++) {
    // echo $count . " " . $buffer;
    if ($count % 7 == 0) array_push($names, trim($buffer));
    if ($count % 7 == 1) array_push($birthdates, trim($buffer));
    
}
print_r($names);
foreach ($names as $key => $value) {
    echo $value  . " " . $birthdates[$key] . "\n"; 
}
