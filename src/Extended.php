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
     * @param $address
     *
     * @return Address
     */
    public function getAddress($address)
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
     * @param $address
     */
    public function getBalance($address)
    {
    }

    /**
     * Returns last [count] transactions greater than [min].
     *
     * @param int $count
     * @param int $min
     * @return void Value in satoshis
     */
    public function getLastTransactions($count = 10, $min = 100)
    {
    }

    /**
     * Returns last 7 blocks.
     */
    public function getLastBlocks()
    {
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
