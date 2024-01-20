<?php

namespace app\Services\Auths\Repositories;

use app\Models\User;
use app\Services\Contacts\BaseRepository;

class WriteUserRepository extends BaseRepository
{
    public function getById(int $id): ?User
    {
        $query = 'select * from users where id=? limit 1';

        $sth = $this->dbh->prepare($query);
        $sth->execute([$id]);

        $result = $sth->fetch();

        return $result ?
            // Это неправильно:
            new User(...$result) : null;
    }

    public function create(array $data): ?User
    {
        $query = 'insert into users (name, email, phone, password, is_active) values (?, ?, ?, ?, ?)';

        $sth = $this->dbh->prepare($query);
        $sth->execute(array_values($data));

        $result = $this->dbh->lastInsertId();

        // Мы это изменим, пока так, внедрим еще один паттерн
        return $this->getById($result);
//        return $result ? new $this->getById($result) : null;
    }
}