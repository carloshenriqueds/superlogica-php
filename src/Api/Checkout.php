<?php

namespace SuperLogica\Api;
use SuperLogica\Route;
use SuperLogica\ClientInterface;

class Checkout
{
    /**
     * @var string
     */
    const ROUT_CHECKOUT = '/checkout';

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Service constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Envia um audio para um número destino
     * @param array $data
     * @return mixed
     */
    public function enviar($data)
    {
        return $this->client->post(
            new Route([self::ROTA_AUDIO]), [$data]);
    }
}