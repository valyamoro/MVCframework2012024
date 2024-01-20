<?php
declare(strict_types=1);

namespace app\Models;

// Переходник между моделью и основной моделью
use app\Core\Model;

abstract class BaseModel extends Model
{
    public function __construct(protected int $id) {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $value): void
    {
        $this->id = $value;
    }

}
