<?php

namespace app\Services\Auths\Repositories;

use app\Models\User;
use app\Services\Contacts\BaseRepository;

class WriteUserRepository extends BaseRepository
{
    public function getById(int $id): ?User
    {
        $query = 'select * from users20012024 where id=? limit 1';

        $sth = $this->dbh->prepare($query);
        $sth->execute([$id]);

        $result = $sth->fetch();

        return $result ? new User(...array_values($result)) : null;
    }

    public function create(array $data): ?User
    {
        $query = 'insert into users20012024 (name, email, phone, password, is_active) values (?, ?, ?, ?, ?)';

        $sth = $this->dbh->prepare($query);

        $sth->execute(\array_values($data));

        $result = $this->dbh->lastInsertId();

        return $this->getById($result);
    }

}
