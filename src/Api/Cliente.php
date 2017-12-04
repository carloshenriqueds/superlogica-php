<?php

namespace SuperLogica\Api;
use SuperLogica\Route;
use SuperLogica\ClientInterface;

class Cliente
{
    /**
     * @var string
     */
    const ROTA_CLIENTE = '/clientes';

    /**
     * @var string
     */
    const ROTA_CONTATO = '/contatos';

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
     * Cadastrar um novo cliente
     * @param array $data
     * @return mixed
     */
    public function cadastrar($data)
    {
        return $this->client->post(
            new Route([self::ROTA_CLIENTE]), [$data]);
    }

    /**
     * Editar um cliente existente
     * @param array $data
     * @return mixed
     */
    public function editar($data)
    {
        return $this->client->put(
            new Route([self::ROTA_CLIENTE]), [$data]);
    }

    /**
     * Adicionar um contato a um cliente
     * @param array $data
     * @return mixed
     */
    public function adicionarContato($data)
    {
        return $this->client->post(
            new Route([self::ROTA_CONTATO]), [$data]);
    }

    /**
     * Editar contato de um cliente
     * @param array $data
     * @return mixed
     */
    public function editarContato($data)
    {
        return $this->client->put(
            new Route([self::ROTA_CONTATO]), [$data]);
    }

    /**
     * Desativar e reativas contato existente
     * @param array $idCliente
     * @param array $dataDesativacao
     * @param array $invalida
     * @return mixed
     */
    public function desativaOuReativa($idCliente, $dataDesativacao, $invalida)
    {
        $data = [
            'ID_SACADO_SAC' => $idCliente,
            'DT_DESATIVACAO_SAC' => $dataDesativacao,
            'FL_INVALIDARCOBSFUTURAS_SAC' => $invalida
            ]
        return $this->client->put(
            new Route([self::ROTA_CLIENTE]), [$data]);
    }
}