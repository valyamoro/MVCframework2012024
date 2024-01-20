<?php
declare(strict_types=1);

namespace app\Services\Contacts;

use app\core\Model;

abstract class BaseRepository
{
    public function __construct(protected \PDO $dbh) {}

    abstract public function getById(int $id): ?Model;

}
