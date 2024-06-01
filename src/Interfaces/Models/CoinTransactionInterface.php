<?php

declare(strict_types=1);

namespace MultipleChain\Interfaces\Models;

use MultipleChain\Enums\AssetDirection;
use MultipleChain\Enums\TransactionStatus;

interface CoinTransactionInterface extends AssetTransactionInterface
{
    /**
     * @return float
     */
    public function getAmount(): float;

    /**
     * @param AssetDirection $direction
     * @param string $address
     * @param float $amount
     * @return TransactionStatus
     */
    public function verifyTransfer(AssetDirection $direction, string $address, float $amount): TransactionStatus;
}
