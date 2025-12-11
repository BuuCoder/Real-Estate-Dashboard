<?php
namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function create(array $data)
    {
        return Client::create($data);
    }

    public function findByEmail(string $email)
    {
        return Client::where('email', $email)->first();
    }

    public function updateToken(Client $client, string $token)
    {
        $client->refresh_token = $token;
        $client->save();
        return $client;
    }
}