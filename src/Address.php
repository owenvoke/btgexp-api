<?php

namespace pxgamer\BTGExp;

/**
 * Class Address.
 */
class Address
{
    use Traits\CanPopulate;

    /**
     * @var string
     */
    private $address;
    /**
     * @var double
     */
    private $sent;
    /**
     * @var double
     */
    private $received;
    /**
     * @var string
     */
    private $balance;
    /**
     * @var array
     */
    private $last_txs;

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return float
     */
    public function getSent(): float
    {
        return $this->sent;
    }

    /**
     * @return float
     */
    public function getReceived(): float
    {
        return $this->received;
    }

    /**
     * @return string
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * @return array
     */
    public function getLastTransactions(): array
    {
        return $this->last_txs;
    }
}
