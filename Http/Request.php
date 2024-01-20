<?php
declare(strict_types=1);

namespace app\Http;

final class Request
{
    public function getPost(): array
    {
        return $_POST;
    }

    public function getGET(): array
    {
        return $_GET;
    }

    public function getFiles(): array
    {
        return $_FILES;
    }

}
