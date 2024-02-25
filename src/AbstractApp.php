<?php

declare(strict_types=1);

namespace Jaks\DesignPatterns;

use ReflectionClass;

abstract class AbstractApp
{
    private function textIntro(): string
    {
        $reflection = new ReflectionClass($this);
        return sprintf("\n========== %s - Example ==========\n", $reflection->getShortName());
    }

    public function run(): void
    {
        echo $this->textIntro();
        echo $this->textBeforeExample();
        $this->exampleUsage();
        echo $this->textAfterExample();
    }

    abstract public function textBeforeExample(): string;
    abstract public function textAfterExample(): string;
    abstract public function exampleUsage(): void;
}
