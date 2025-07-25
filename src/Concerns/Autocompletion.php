<?php

namespace Afsdarif\FilamentCodeField\Concerns;

trait Autocompletion
{
    public bool $autocompletion = true;

    public function disableAutocompletion(): static
    {
        $this->autocompletion = false;

        return $this;
    }
}
