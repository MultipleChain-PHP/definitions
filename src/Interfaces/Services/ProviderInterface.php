<?php

declare(strict_types=1);

namespace MultipleChain\Interfaces\Services;

use MultipleChain\Types\NetworkConfig;

/**
 * @property NetworkConfig $network
 * @property ProviderInterface|null $instance (static)
 */
interface ProviderInterface
{
    /**
     * @param NetworkConfig $networkConfig
     */
    public function __construct(NetworkConfig $networkConfig);

    /**
     * @return ProviderInterface
     */
    public static function instance(): ProviderInterface;

    /**
     * @param NetworkConfig $networkConfig
     * @return void
     */
    public static function initialize(NetworkConfig $networkConfig): void;

    /**
     * @param NetworkConfig $networkConfig
     * @return void
     */
    public function update(NetworkConfig $networkConfig): void;

    /**
     * @return boolean
     */
    public function isTestnet(): bool;

    /**
     * @param string|null $url
     * @return boolean
     */
    public function checkRpcConnection(?string $url = null): bool;

    /**
     * @param string|null $url
     * @return boolean
     */
    public function checkWsConnection(?string $url = null): bool;
}
