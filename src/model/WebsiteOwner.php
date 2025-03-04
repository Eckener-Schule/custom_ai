<?php

namespace model;

class WebsiteOwner
{
    public int $id;
    public string $firstName;
    public string $lastName;

    /**
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(int $id, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}