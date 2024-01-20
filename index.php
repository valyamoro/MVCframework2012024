<?php

use app\Databases\DatabaseConnection;

require __DIR__ . '/vendor/autoload.php';

$db = require __DIR__ . '/config/db.php';

//$databaseConfiguration = new \app\Users\Databases\DatabaseConfiguration(...$db['pdo']);
//$databaseConnection = new DatabaseConnection($databaseConfiguration);
//$readUserRepository = new \app\Users\Services\Auths\Repositories\ReadUserRepository($databaseConnection->getConnection());

//$id = 2;
//$user = $writeUserRepository->getById($id);
//print_r($user);

$databaseConfiguration = new \app\Databases\DatabaseConfiguration(...$db['pdo']);
$databaseConnection = new DatabaseConnection($databaseConfiguration);
$writeUserRepository = new \app\Services\Auths\Repositories\WriteUserRepository($databaseConnection->getConnection());

$data = [
    'name' => 'kutlumbek 1',
    'email' => 'kutlumbek@gmail.com',
    'phone' => '12345667',
    'password' => '1234567jJ',
    'isActive' => '1',
];

$user = $writeUserRepository->create($data);
print_r($user);












































