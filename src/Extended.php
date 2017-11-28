<?php

namespace pxgamer\BTGExp;

use GuzzleHttp\Client;

/**
 * Class Extended
 */
class Extended
{
    /**
     * The base URI of the extended API.
     */
    const BASE_URI = 'http://btgexp.com/ext/';
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
     * Returns current money supply.
     *
     * @return double
     */
    public function getMoneySupply()
    {
        return (double)$this->client
            ->get('getmoneysupply')
            ->getBody()
            ->getContents();
    }

    /**
     * Returns network information.
     *
     * @return Network
     */
    public function getNetwork()
    {
        return (new Network())
            ->populate(
                \GuzzleHttp\json_decode(
                    $this->client
                        ->get('getnetwork')
                        ->getBody()
                        ->getContents()
                )
            );
    }

    /**
     * Returns information for given address.
     *
     * @param string $address
     *
     * @return Address
     */
    public function getAddress(string $address)
    {
        return (new Address())
            ->populate(
                \GuzzleHttp\json_decode(
                    $this->client
                        ->get('getaddress/'.$address)
                        ->getBody()
                        ->getContents()
                )
            );
    }

    /**
     * Returns current balance of given address.
     *
     * @param string $address
     *
     * @return double
     */
    public function getBalance(string $address)
    {
        return (double)$this->client
            ->get('getbalance/'.$address)
            ->getBody()
            ->getContents();
    }

    /**
     * Returns last [count] transactions greater than [min].
     *
     * @param int $count
     * @param int $min
     *
     * @return array Value in satoshis
     */
    public function getLastTransactions($count = 10, $min = 100)
    {
        return \GuzzleHttp\json_decode(
            $this->client
                       ->get('getlasttxs/'.$count.'/'.$min)
                       ->getBody()
                       ->getContents()
        )->data ?? [];
    }

    /**
     * Returns last 7 blocks.
     *
     * @return array
     */
    public function getLastBlocks()
    {
        return \GuzzleHttp\json_decode(
            $this->client
                       ->get('getlastblocks')
                       ->getBody()
                       ->getContents()
        ) ?? [];
    }

    /**
     * Returns a block by it's height.
     *
     * @param $height
     */
    public function getBlockByHeight($height)
    {
    }
}
