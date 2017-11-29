<?php

namespace pxgamer\BTGExp;

use GuzzleHttp\Client;

/**
 * Class Basic.
 */
class Basic
{
    /**
     * The base URI of the extended API.
     */
    const BASE_URI = 'http://btgexp.com/api/';
    /**
     * @var Client
     */
    protected $client;

    /**
     * Extended constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => self::BASE_URI,
        ]);
    }

    /**
     * Returns the current difficulty.
     *
     * @return float
     */
    public function getDifficulty()
    {
        return (double)$this->client
            ->get('getdifficulty')
            ->getBody()
            ->getContents();
    }

    /**
     * Returns the number of connections the block explorer has to other nodes.
     *
     * @return int
     */
    public function getConnectionCount()
    {
        return (int)$this->client
            ->get('getconnectioncount')
            ->getBody()
            ->getContents();
    }

    /**
     * Returns the number of blocks currently in the block chain.
     *
     * @return int
     */
    public function getBlockCount()
    {
        return (int)$this->client
            ->get('getblockcount')
            ->getBody()
            ->getContents();
    }

    /**
     * Returns the hash of the block at the specified index.
     *
     * @param int $index
     *
     * @return string
     */
    public function getBlockHashByIndex(int $index)
    {
        $options = [
            'query' => [
                'index' => $index
            ]
        ];

        return $this->client
            ->get('getblockhash', $options)
            ->getBody()
            ->getContents();
    }

    /**
     * Returns information about the block with the given hash.
     *
     * @param string $hash
     *
     * @return Block
     */
    public function getBlockByHash(string $hash)
    {
        $options = [
            'query' => [
                'hash' => $hash
            ]
        ];

        return (new Block())
            ->populate(
                \GuzzleHttp\json_decode(
                    $this->client
                        ->get('getblock', $options)
                        ->getBody()
                        ->getContents()
                )
            );
    }

    /**
     * Returns raw transaction representation for given transaction id.
     *
     * @param string $hash
     * @param bool   $decrypt
     *
     * @return Transaction|string
     */
    public function getTransactionById(string $hash, bool $decrypt = true)
    {
        $options = [
            'query' => [
                'txid' => $hash,
                'decrypt' => (string)($decrypt ? '1' : '0'),
            ]
        ];

        $data = $this->client
            ->get('getrawtransaction', $options)
            ->getBody()
            ->getContents();

        if ($decrypt) {
            return (new Transaction())
                ->populate(
                    \GuzzleHttp\json_decode($data)
                );
        }

        return $data;
    }

    /**
     * Returns the current network hash rate (hash/s).
     *
     * @return double
     */
    public function getNetworkHashRate()
    {
        return (double)$this->client
            ->get('getnetworkhashps')
            ->getBody()
            ->getContents();
    }
}
