<?php

namespace SuperLogica\Api;
use SuperLogica\Route\Route;
use SuperLogica\Client\ClientInterface;

class Checkout
{
    /**
     * @var string
     */
    const ROTA_CHECKOUT = '/checkout';

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
     * Checkout / Contratação / Contratar um plano, cadastrando o cliente com sua senha de acesso e forma de pagamento
     * @param array $data
     * @return mixed
     */
    public function contratar($data)
    {
        return $this->client->post(
            new Route([self::ROTA_CHECKOUT]), [$data]);
    }
}