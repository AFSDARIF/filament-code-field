<?php

namespace Afsdarif\FilamentCodeField\Concerns;

trait LineNumbers
{
    public bool $lineNumbers = false;

    public function withLineNumbers(): static
    {
        $this->lineNumbers = true;

        return $this;
    }
}
