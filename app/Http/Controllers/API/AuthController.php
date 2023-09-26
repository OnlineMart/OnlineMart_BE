<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Create new a AuthController instance
     *
     * @return  void
     */
    public function __construct()
    {
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
    }

    /**
     * Register a User.
     *
     * @param RegisterRequest $request
     *
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        try {
            $validatedData = $request->validated();

            $user = User::create([
                'full_name' => $validatedData['full_name'],
                'email'      => $validatedData['email'],
                'password'   => Hash::make($validatedData['password']),
            ]);

            return jsonResponse($user, 200, 'User created successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Login user
     *
     * @param LoginRequest $request
     *
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        $token       = Auth::attempt($credentials);

        if (!$token) {
            return jsonResponse(null, 401, 'Unauthorized');
        }

        return $this->createNewToken($token, 'Login successfully');
    }

    /**
     * Get the token array structure
     *
     * @param string $token
     * @param string $message
     *
     * @return JsonResponse
     */
    public function createNewToken(string $token, string $message): JsonResponse
    {
        return jsonResponse([
            'user'         => Auth::user(),
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ], 200, $message);
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function profile(): JsonResponse
    {
        return jsonResponse(Auth::user(), 200, 'Get data successfully');
    }

    /**
     * Refresh a token
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {

        return $this->createNewToken(auth()->refresh(), 'Refresh successfully!');
    }

    /**
     * Log the user out (Invalid token)
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::logout();

        return jsonResponse([], 200, 'Successfully logged out');
    }
}
