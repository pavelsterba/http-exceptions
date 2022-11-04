<?php

declare(strict_types=1);

use HttpException\ClientError\NotFoundException;
use HttpException\HttpException;

require_once "./vendor/autoload.php";

$e = new Exception("foo");

try {
    throw NotFoundException::get("testing eksepsny", $e);
} catch (HttpException $th) {
    echo "CATCHED!\n";
    echo $th->getMessage() . "\n";
    echo $th->getCode() . "\n";
    echo $th->getPrevious()->getMessage() . "\n";
}
