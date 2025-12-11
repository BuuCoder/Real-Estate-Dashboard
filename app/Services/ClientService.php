<?php

namespace App\Services;

use App\Repositories\ClientRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Facades\JWTAuth;

class ClientService
{
    protected $repo;

    public function __construct(ClientRepository $repo)
    {
        $this->repo = $repo;
    }

    public function register(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->repo->create($data);
    }

    public function login(array $data)
    {
        $client = $this->repo->findByEmail($data['email']);
        if ($client && Hash::check($data['password'], $client->password)) {
            $token = JWTAuth::fromUser($client);
            $this->repo->updateToken($client, $token);
            return ['client' => $client, 'token' => $token];
        }
        return null;
    }

    // Redirect to Google for login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect()->getTargetUrl();
    }

    // Handle callback from Frontend with Google token
    public function handleGoogleCallback($googleToken)
    {
        $googleUser = Socialite::driver('google')->stateless()->userFromToken($googleToken);
        return $this->loginGoogle($googleUser);
    }


    public function loginGoogle($googleUser)
    {
        $client = $this->repo->findByEmail($googleUser->getEmail());
        if (!$client) {
            $client = $this->repo->create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'active' => true,
                'password' => Hash::make(\Illuminate\Support\Str::random(16))
            ]);
        }
        $token = JWTAuth::fromUser($client);
        $this->repo->updateToken($client, $token);
        return ['client' => $client, 'token' => $token];
    }
}
