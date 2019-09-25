<?php

require_once __DIR__.'/vendor/autoload.php';

use CatFacts\Api\Client;

// ce qu'on faisait avant dans HTTPlug
$client = Client::create();

// request d'un endpoint
$fact = $client->randomFact();
var_dump($fact);

// object(CatFacts\Api\Model\Fact)#23 (10) {
//     ["id":protected]=>
//     string(24) "591f98703b90f7150a19c173"
//     ["v":protected]=>
//     int(0)
//     ["user":protected]=>
//     NULL
//     ["text":protected]=>
//     string(83) "The ancestor of all domestic cats is the African Wild Cat which still exists today."
//     ["updatedAt":protected]=>
//     string(24) "2019-08-24T20:20:02.145Z"
//     ["sendDate":protected]=>
//     NULL
//     ["deleted":protected]=>
//     bool(false)
//     ["source":protected]=>
//     string(3) "api"
//     ["used":protected]=>
//     bool(false)
//     ["type":protected]=>
//     string(3) "cat"
// }
