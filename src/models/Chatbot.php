<?php

namespace models;

use database\Database;
use PDO;

class Chatbot
{
    private int $id;
    private string $name;
    private int $companyID;
    private int $promptID;
    private int $websiteOwnerID;

    /**
     * @param int $id
     * @param string $name
     * @param int $companyID
     * @param int $promptID
     * @param int $websiteOwnerID
     */
    public function __construct(int $id, string $name, int $companyID, int $promptID, int $websiteOwnerID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->companyID = $companyID;
        $this->promptID = $promptID;
        $this->websiteOwnerID = $websiteOwnerID;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCompanyID(): int
    {
        return $this->companyID;
    }

    public function setCompanyID(int $companyID): void
    {
        $this->companyID = $companyID;
    }

    public function getPromptID(): int
    {
        return $this->promptID;
    }

    public function setPromptID(int $promptID): void
    {
        $this->promptID = $promptID;
    }

    public function getWebsiteOwnerID(): int
    {
        return $this->websiteOwnerID;
    }

    public function setWebsiteOwnerID(int $websiteOwnerID): void
    {
        $this->websiteOwnerID = $websiteOwnerID;
    }

    public static function find(int $id): ?Chatbot
    {
        $stmt = Database::getInstance()->prepare("
            SELECT id, name, companyID, promptID, websiteOwnerID 
            FROM Chatbot
            WHERE id = :id
        ");

        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result ? new Chatbot($result['id'], $result['name'], $result['companyID'], $result['promptID'], $result['websiteOwnerID']) : null;
    }
}