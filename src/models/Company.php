<?php

namespace models;

use database\Database;
use PDO;

class Company
{
    private int $id;
    private string $company;
    private string $website;

    /**
     * @param int $id
     * @param string $company
     * @param string $website
     */
    public function __construct(int $id, string $company, string $website)
    {
        $this->id = $id;
        $this->company = $company;
        $this->website = $website;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public static function find(int $id): ?Company
    {
        $stmt = Database::getInstance()->prepare("
            SELECT id, name, website
            FROM Company
            WHERE id = :id
        ");

        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result ? new Company($result['id'], $result['name'], $result['website']) : null;
    }
}