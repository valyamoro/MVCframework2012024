<?php

namespace app\Models;

class User extends BaseModel
{
    public function __construct(
        protected int $id,
        private string $name,
        private string $phone,
        private string $email,
        private string $password,
        private string $isActive,
    ) {
        parent::__construct($id);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getIsActive(): string
    {
        return $this->isActive;
    }

}
