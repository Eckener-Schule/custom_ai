<?php

namespace model;

class Company
{
    public int $id;
    public string $company;
    public string $website;

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
}