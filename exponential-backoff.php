<?php
$server = fn() => fgets(fopen("serverResponse.txt", "r"));
$client = fn() => $server();

for($count = 0;; ++$count && sleep(2 ** $count)) {
    echo $count . " " . date("h:m:s") . " ". $client() . "\n";
}
