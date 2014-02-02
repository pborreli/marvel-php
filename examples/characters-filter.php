<?php

include_once '../creds.php';
include_once '../Services/Marvel.php';

$client = new Services_Marvel($public_key, $private_key);
$characters = $client->characters->index(1, 25, array('name' => 'Deadpool'));

foreach($characters as $character) {
    echo $character->name . "\n";
}