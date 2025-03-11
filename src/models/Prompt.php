<?php

namespace models;

use database\Database;
use PDO;

class Prompt
{
    private int $id;
    private string $prompt;

    /**
     * @param int $id
     * @param string $prompt
     */
    public function __construct(int $id, string $prompt)
    {
        $this->id = $id;
        $this->prompt = $prompt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPrompt(): string
    {
        return $this->prompt;
    }

    public function setPrompt(string $prompt): void
    {
        $this->prompt = $prompt;
    }

    public static function find(int $id): ?Prompt
    {
        $stmt = Database::getInstance()->prepare("
            SELECT id, prompt
            FROM Prompt
            WHERE id = :id
        ");

        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result ? new Prompt($result['id'], $result['prompt']) : null;
    }
}