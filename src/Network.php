<?php

namespace pxgamer\BTGExp;

/**
 * Class Network
 */
class Network
{
    use Traits\CanPopulate;

    /**
     * @var int
     */
    private $version;
    /**
     * @var int
     */
    private $protocolversion;
    /**
     * @var int
     */
    private $blocks;
    /**
     * @var int
     */
    private $connections;
    /**
     * @var double
     */
    private $difficulty;
    /**
     * @var bool
     */
    private $testnet;
    /**
     * @var bool
     */
    private $mainnet;
    /**
     * @var int
     */
    private $timeoffset;

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return int
     */
    public function getProtocolVersion(): int
    {
        return $this->protocolversion;
    }

    /**
     * @return int
     */
    public function getBlocks(): int
    {
        return $this->blocks;
    }

    /**
     * @return int
     */
    public function getConnections(): int
    {
        return $this->connections;
    }

    /**
     * @return float
     */
    public function getDifficulty(): float
    {
        return $this->difficulty;
    }

    /**
     * @return bool
     */
    public function isTestnet(): bool
    {
        return $this->testnet;
    }

    /**
     * @return bool
     */
    public function isMainnet(): bool
    {
        return $this->mainnet;
    }

    /**
     * @return int
     */
    public function getTimeOffset(): int
    {
        return $this->timeoffset;
    }
}