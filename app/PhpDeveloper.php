<?php

namespace App;

class PhpDeveloper extends Developer
{
    protected string $name;
    protected int $age;
    protected string $jobTitle;

    /**
     * @param string $name
     * @param int $age
     * @param string $jobTitle
     */
    public function __construct(string $name, int $age, string $jobTitle)
    {
        $this->name = $name;
        $this->age = $age;
        $this->jobTitle = $jobTitle;
    }

    public function evaluateTheTask(): int
    {
        return rand(0, 10);
    }
}