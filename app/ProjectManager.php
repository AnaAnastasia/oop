<?php

namespace App;

class ProjectManager implements ManagerInterface
{
    const CONST = 2;

    public function evaluateTask($hours): int
    {
        return $hours * self::CONST;
    }
}

