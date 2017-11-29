<?php

namespace pxgamer\BTGExp;

use PHPUnit\Framework\TestCase;

/**
 * Class BasicTest.
 */
class BasicTest extends TestCase
{
    /**
     * An example block index (equal to self::BLOCK_HASH).
     */
    const BLOCK_INDEX = 500001;
    /**
     * An example block hash (equal to self::BLOCK_INDEX).
     */
    const BLOCK_HASH = '000000000c1107d9236cdfa895e6d3ab840010ea65e1bd1f0f1383f14d9c6923';
    /**
     * An example transaction hash.
     */
    const TRANSACTION_HASH = 'c4d94d2bdd8c5f6df63cdf623649a3c45c68a3b31d34a91e50e02d6ab7a3840f';
    /**
     * @var Basic
     */
    private $instance;

    /**
     * Set up the instance.
     */
    public function setUp()
    {
        $this->instance = new Basic();
    }

    /**
     * Test if the Basic::getDifficulty() method works correctly.
     */
    public function testCanGetDifficulty()
    {
        $response = $this->instance
            ->getDifficulty();

        $this->assertInternalType('double', $response);
        $this->assertGreaterThan(0, $response);
    }

    /**
     * Test if the Basic::getConnectionCount() method works correctly.
     */
    public function testCanGetConnectionCount()
    {
        $response = $this->instance
            ->getConnectionCount();

        $this->assertInternalType('int', $response);
        $this->assertGreaterThan(0, $response);
    }

    /**
     * Test if the Basic::getBlockCount() method works correctly.
     */
    public function testCanGetBlockCount()
    {
        $response = $this->instance
            ->getBlockCount();

        $this->assertInternalType('int', $response);
        $this->assertGreaterThan(0, $response);
    }

    /**
     * Test if the Basic::getBlockHashByIndex() method works correctly.
     */
    public function testCanGetBlockHashByIndex()
    {
        $response = $this->instance
            ->getBlockHashByIndex(BasicTest::BLOCK_INDEX);

        $this->assertInternalType('string', $response);
        $this->assertEquals(BasicTest::BLOCK_HASH, $response);
    }

    /**
     * Test if the Basic::getBlockByHash() method works correctly.
     */
    public function testCanGetBlockByHash()
    {
        $response = $this->instance
            ->getBlockByHash(BasicTest::BLOCK_HASH);

        $this->assertInstanceOf(Block::class, $response);
        $this->assertInternalType('string', $response->getHash());
        $this->assertInternalType('int', $response->getConfirmations());
        $this->assertInternalType('int', $response->getStrippedSize());
        $this->assertInternalType('int', $response->getSize());
        $this->assertInternalType('int', $response->getWeight());
        $this->assertInternalType('int', $response->getHeight());
        $this->assertInternalType('int', $response->getVersion());
        $this->assertInternalType('string', $response->getVersionHex());
        $this->assertInternalType('string', $response->getMerkleRoot());
        $this->assertInternalType('array', $response->getTransactionHashes());
        $this->assertInternalType('int', $response->getTime());
        $this->assertInternalType('int', $response->getMedianTime());
        $this->assertInternalType('int', $response->getNonceUint32());
        $this->assertInternalType('string', $response->getNonce());
        $this->assertInternalType('string', $response->getBits());
        $this->assertInternalType('double', $response->getDifficulty());
        $this->assertInternalType('string', $response->getChainWork());
        $this->assertInternalType('string', $response->getPreviousBlockHash());
        $this->assertInternalType('string', $response->getNextBlockHash());
    }

    /**
     * Test if the Basic::getTransactionById(..., true) method works correctly.
     */
    public function testCanGetTransactionByIdDecrypted()
    {
        $response = $this->instance
            ->getTransactionById(BasicTest::TRANSACTION_HASH, true);

        $this->assertInstanceOf(Transaction::class, $response);
        $this->assertInternalType('string', $response->getTransactionId());
        $this->assertInternalType('string', $response->getHash());
        $this->assertInternalType('int', $response->getVersion());
        $this->assertInternalType('int', $response->getSize());
        $this->assertInternalType('int', $response->getVSize());
        $this->assertInternalType('int', $response->getLockTime());
        $this->assertInternalType('array', $response->getInputs());
        $this->assertInternalType('array', $response->getOutputs());
        $this->assertInternalType('string', $response->getHex());
        $this->assertInternalType('string', $response->getBlockHash());
        $this->assertInternalType('int', $response->getConfirmations());
        $this->assertInternalType('int', $response->getTime());
        $this->assertInternalType('int', $response->getBlockTime());
    }

    /**
     * Test if the Basic::getTransactionById(..., false) method works correctly.
     */
    public function testCanGetTransactionByIdNotDecrypted()
    {
        $response = $this->instance
            ->getTransactionById(BasicTest::TRANSACTION_HASH, false);

        $this->assertInternalType('string', $response);
    }

    /**
     * Test if the Basic::getNetworkHashRate() method works correctly.
     */
    public function testCanGetNetworkHashRate()
    {
        $response = $this->instance
            ->getNetworkHashRate();

        $this->assertInternalType('double', $response);
        $this->assertGreaterThan(0, $response);
    }
}
