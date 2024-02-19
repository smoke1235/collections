<?php

namespace Peter\Collections\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \Peter\Collections\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
