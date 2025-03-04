<?php

namespace model;
class Prompt
{
    public int $id;
    public string $prompt;

    /**
     * @param int $id
     * @param string $prompt
     */
    public function __construct(int $id, string $prompt)
    {
        $this->id = $id;
        $this->prompt = $prompt;
    }
}