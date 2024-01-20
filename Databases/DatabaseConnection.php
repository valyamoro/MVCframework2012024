<?php
declare(strict_types=1);

namespace app\Databases;

class DatabaseConnection
{
    public function __construct(private DatabaseConfiguration $configuration) {}

    public function getConnection(): \PDO
    {
        return new \PDO(
            $this->getDsn(),
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getOptions(),
        );
    }

    private function getDsn(): string
    {
        return sprintf(
            '%s:host=%s;dbname=%s;charset=%s',
            $this->configuration->getPort(),
            $this->configuration->getHost(),
            $this->configuration->getDbname(),
            $this->configuration->getCharset(),
        );
    }

}
