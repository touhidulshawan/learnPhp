<?php

$url = 'https://jsonplaceholder.typicode.com/todos';

$resource = curl_init($url);

curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($resource);

echo $result;
