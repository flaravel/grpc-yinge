<?php

require "./vendor/autoload.php";

/** @var \Yinge\Grpc\Qpm\QpmServiceClient $client */
$client = new \Yinge\Grpc\Client(\Yinge\Grpc\Qpm\QpmServiceClient::class);

$req = new \Yinge\Grpc\Qpm\MListReq();
$req->setFactoryId(1123);
try {
    /** @var \Yinge\Grpc\Qpm\MListResp $a */
    $a = $client->MaterielList($req);
} catch (Exception $e) {
    die($e);
}
$a = $a->serializeToJsonString();
var_dump($a);
die('ok');

