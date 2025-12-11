<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ClientService;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    protected $service;

    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }

    public function register(Request $request)
    {
        Log::info('Register request received', ['data' => $request->all()]);
        try {
            $client = $this->service->register($request->all());
            Log::info('Register success', ['client_id' => $client['id'] ?? null]);
            return response()->json($client, 201);
        } catch (Exception $e) {
            Log::error('Register failed', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function login(Request $request)
    {
        Log::info('Login request received', ['data' => $request->all()]);
        try {
            $result = $this->service->login($request->all());
            if ($result) {
                Log::info('Login success', ['client_id' => $result['id'] ?? null]);
                return response()->json($result);
            }
            Log::warning('Login failed: Invalid credentials');
            return response()->json(['error' => 'Invalid credentials'], 401);
        } catch (Exception $e) {
            Log::error('Login failed', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function loginGoogle(Request $request)
    {
        Log::info('Google login request received');
        try {
            $googleToken = $request->input('token');
            if (!$googleToken) {
                return response()->json(['error' => 'Google token is required'], 400);
            }
            
            $result = $this->service->handleGoogleCallback($googleToken);
            Log::info('Google login success', ['client_id' => $result['id'] ?? null]);
            return response()->json($result);
        } catch (Exception $e) {
            Log::error('Google login failed', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}