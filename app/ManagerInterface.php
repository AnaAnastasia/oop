<?php

namespace App;

interface ManagerInterface
{
    public function evaluateTask($hours): int;
}