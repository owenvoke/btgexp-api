<?php

namespace pxgamer\BTGExp;

use PHPUnit\Framework\TestCase;

/**
 * Class ExtendedTest
 */
class ExtendedTest extends TestCase
{
    const TEST_ADDRESS = 'GP4MnT7Xm4ahZhRcWFaqPGkZknMda1XuzA';
    /**
     * @var Extended
     */
    private $instance;

    /**
     * Set up the instance
     */
    public function setUp()
    {
        $this->instance = new Extended();
    }

    public function testCanGetMoneySupply()
    {
        $response = $this->instance
            ->getMoneySupply();

        $this->assertInternalType('double', $response);
        $this->assertGreaterThan(0, $response);
    }

    public function testCanGetNetwork()
    {
        $response = $this->instance
            ->getNetwork();

        $this->assertInstanceOf(Network::class, $response);
        $this->assertInternalType('int', $response->getVersion());
        $this->assertInternalType('int', $response->getProtocolVersion());
        $this->assertInternalType('int', $response->getBlocks());
        $this->assertInternalType('int', $response->getConnections());
        $this->assertInternalType('double', $response->getDifficulty());
        $this->assertInternalType('boolean', $response->isTestnet());
        $this->assertInternalType('boolean', $response->isMainnet());
        $this->assertInternalType('int', $response->getTimeOffset());
    }

    public function testCanGetAddress()
    {
        $response = $this->instance
            ->getAddress(self::TEST_ADDRESS);

        $this->assertInstanceOf(Address::class, $response);
        $this->assertInternalType('string', $response->getAddress());
        $this->assertInternalType('double', $response->getSent());
        $this->assertInternalType('double', $response->getReceived());
        $this->assertInternalType('array', $response->getLastTransactions());
    }

    public function testCanGetBalance()
    {
        $response = $this->instance
            ->getBalance(self::TEST_ADDRESS);

        $this->assertInternalType('double', $response);
        $this->assertGreaterThan(0, $response);
    }

    public function testCanGetLastTransactions()
    {
        $response = $this->instance
            ->getLastTransactions(10, 100);

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
    }

    public function testCanGetLastBlocks()
    {
        $response = $this->instance
            ->getLastBlocks();

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
        $this->assertInstanceOf(Block::class, $response[0]);
    }

    public function testCanGetBlockByHeight()
    {
        $response = $this->instance
            ->getBlockByHeight(500001);

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
        $this->assertInstanceOf(\stdClass::class, $response->getTransactions());
    }
}
