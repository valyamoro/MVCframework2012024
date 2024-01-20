<?php

namespace app\Services\Auths\Repositories;

use app\Models\User;
use app\Services\Contacts\BaseRepository;

// В сервисе заполняют модель данными.
class ReadUserRepository extends BaseRepository
{
    public function getById(int $id): ?User
    {
        $query = 'select * from users where id=? limit 1';

        $sth = $this->dbh->prepare($query);
        $sth->execute([$id]);

        $result = $sth->fetch();

        return $result ? new User(...$result) : null;
    }



}
