<?php

namespace model;

class Chatbot
{
    public int $id;
    public string $name;
    public int $companyID;
    public int $promptID;
    public int $websiteOwnerID;

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
}