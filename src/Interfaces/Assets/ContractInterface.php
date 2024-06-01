<?php

declare(strict_types=1);

namespace MultipleChain\Interfaces\Assets;

use MultipleChain\Interfaces\Services\ProviderInterface;

/**
 * @property string $address
 * @property ProviderInterface $provider
 */
interface ContractInterface
{
    /**
     * @param string $address
     * @param ProviderInterface|null $provider
     */
    public function __construct(string $address, ?ProviderInterface $provider);

    /**
     * @return string
     */
    public function getAddress(): string;

    /**
     * @param string $method
     * @param mixed ...$args
     * @return mixed
     */
    public function callMethod(string $method, mixed ...$args): mixed;

    /**
     * @param string $method
     * @param mixed ...$args
     * @return mixed
     */
    public function getMethodData(string $method, mixed ...$args): mixed;

    /**
     * @param string $method
     * @param string $from
     * @param mixed ...$args
     * @return mixed
     */
    public function createTransactionData(string $method, string $from, mixed ...$args): mixed;
}
