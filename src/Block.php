<?php

namespace pxgamer\BTGExp;

/**
 * Class Block
 */
class Block
{
    use Traits\CanPopulate;

    /**
     * @var string
     */
    private $hash;
    /**
     * @var int
     */
    private $confirmations;
    /**
     * @var int
     */
    private $strippedsize;
    /**
     * @var int
     */
    private $size;
    /**
     * @var int
     */
    private $weight;
    /**
     * @var int
     */
    private $height;
    /**
     * @var int
     */
    private $version;
    /**
     * @var string
     */
    private $versionHex;
    /**
     * @var string
     */
    private $merkleroot;
    /**
     * @var array
     */
    private $tx;
    /**
     * @var int
     */
    private $time;
    /**
     * @var int
     */
    private $mediantime;
    /**
     * @var int
     */
    private $nonceUint32;
    /**
     * @var string
     */
    private $nonce;
    /**
     * @var string
     */
    private $bits;
    /**
     * @var double
     */
    private $difficulty;
    /**
     * @var string
     */
    private $chainwork;
    /**
     * @var string
     */
    private $previousblockhash;
    /**
     * @var string
     */
    private $nextblockhash;
    /**
     * @var object
     */
    private $transactions;

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
    public function getConfirmations(): int
    {
        return $this->confirmations;
    }

    /**
     * @return int
     */
    public function getStrippedSize(): int
    {
        return $this->strippedsize;
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
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getVersionHex(): string
    {
        return $this->versionHex;
    }

    /**
     * @return string
     */
    public function getMerkleRoot(): string
    {
        return $this->merkleroot;
    }

    /**
     * @return array
     */
    public function getTransactionHashes(): array
    {
        return $this->tx;
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
    public function getMedianTime(): int
    {
        return $this->mediantime;
    }

    /**
     * @return int
     */
    public function getNonceUint32(): int
    {
        return $this->nonceUint32;
    }

    /**
     * @return string
     */
    public function getNonce(): string
    {
        return $this->nonce;
    }

    /**
     * @return string
     */
    public function getBits(): string
    {
        return $this->bits;
    }

    /**
     * @return float
     */
    public function getDifficulty(): float
    {
        return $this->difficulty;
    }

    /**
     * @return string
     */
    public function getChainWork(): string
    {
        return $this->chainwork;
    }

    /**
     * @return string
     */
    public function getPreviousBlockHash(): string
    {
        return $this->previousblockhash;
    }

    /**
     * @return string
     */
    public function getNextBlockHash(): string
    {
        return $this->nextblockhash;
    }

    /**
     * @return \stdClass
     */
    public function getTransactions(): \stdClass
    {
        return $this->transactions;
    }
}
