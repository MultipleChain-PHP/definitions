<?php

declare(strict_types=1);

namespace MultipleChain\Interfaces\Assets;

interface AssetInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getSymbol(): string;

    /**
     * @param string $owner
     * @return float
     */
    public function getBalance(string $owner): float;
}
