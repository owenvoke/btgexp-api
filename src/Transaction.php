<?php

namespace pxgamer\BTGExp;

use pxgamer\BTGExp\Traits\CanPopulate;

/**
 * Class Transaction
 */
class Transaction
{
    use CanPopulate;

    /**
     * @var string
     */
    private $txid;
    /**
     * @var string
     */
    private $hash;
    /**
     * @var int
     */
    private $version;
    /**
     * @var int
     */
    private $size;
    /**
     * @var int
     */
    private $vsize;
    /**
     * @var int
     */
    private $locktime;
    /**
     * @var array
     */
    private $vin;
    /**
     * @var array
     */
    private $vout;
    /**
     * @var string
     */
    private $hex;
    /**
     * @var string
     */
    private $blockhash;
    /**
     * @var int
     */
    private $confirmations;
    /**
     * @var int
     */
    private $time;
    /**
     * @var int
     */
    private $blocktime;

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->txid;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

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
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getVSize(): int
    {
        return $this->vsize;
    }

    /**
     * @return int
     */
    public function getLockTime(): int
    {
        return $this->locktime;
    }

    /**
     * @return array
     */
    public function getInputs(): array
    {
        return $this->vin;
    }

    /**
     * @return array
     */
    public function getOutputs(): array
    {
        return $this->vout;
    }

    /**
     * @return string
     */
    public function getHex(): string
    {
        return $this->hex;
    }

    /**
     * @return string
     */
    public function getBlockHash(): string
    {
        return $this->blockhash;
    }

    /**
     * @return int
     */
    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getBlockTime(): int
    {
        return $this->blocktime;
    }
}
