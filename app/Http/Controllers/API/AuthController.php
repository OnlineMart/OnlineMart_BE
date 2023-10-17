<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Shop;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->middleware('guest', ['only' => ['login', 'register']]);
        $this->middleware('throttle:5,1')->only('login');
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
        return DB::transaction(function () use ($request) {
            try {
                $validatedData = $request->validated();

                if ($validatedData['type'] === User::ADMIN) {
                    $shop = Shop::create([
                        'name'   => $validatedData['full_name'],
                        'email'  => $validatedData['email'],
                        'phone'  => $validatedData['phone'],
                        'status' => Shop::DISABLED
                    ]);

                    $user = User::create([
                        'full_name' => $validatedData['full_name'],
                        'email'     => $validatedData['email'],
                        'phone'     => $validatedData['phone'],
                        'password'  => Hash::make($validatedData['password']),
                        'type'      => User::ADMIN,
                        'shop_id'   => $shop->id
                    ]);
                } else {
                    $user = User::create([
                        'full_name' => $validatedData['full_name'],
                        'email'     => $validatedData['email'],
                        'password'  => Hash::make($validatedData['password']),
                        'type'      => User::USER
                    ]);
                }

                return jsonResponse($user, 200, 'User created successfully');
            } catch (Exception $e) {
                return jsonResponse($e->getMessage(), 500, 'Something went wrong');
            }
        });
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

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return jsonResponse(null, 401, 'Unauthorized');
            }

            return $this->createNewToken($token, 'Login successfully');
        } catch (JWTException $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Get the token array structure
     *
     * @param string $token
     * @param string $message
     *
     * @return JsonResponse
     */
    private function createNewToken(string $token, string $message): JsonResponse
    {
        // Check if the token is expired
        $tokenExpiration = auth()->factory()->getTTL() * 60;
        if ($tokenExpiration <= 0) {
            return jsonResponse(null, 401, 'Token has expired');
        }

        $refreshToken = JWTAuth::fromUser(Auth::user());

        $response = jsonResponse([
            'user'         => Auth::user(),
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => $tokenExpiration
        ], 200, $message);

        $response->withCookie(
            Cookie::make('access_token', $token, env("LOGGED_IN_TTL"), '/', null, false, true) // Set httpOnly to true
        );

        $response->withCookie(
            Cookie::make('logged_in', true, env("LOGGED_IN_TTL"), '/', null, false, false)
        );

        $response->withCookie(
            Cookie::make('refresh_token', $refreshToken, env("REFRESH_TTL"), '/', null, false, true) // Set httpOnly to true
        );

        return $response;
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
    public function refresh(Request $request): JsonResponse
    {
        try {
            $refreshToken = $request->cookie('refresh_token');

            if ($refreshToken) {
                $token = JWTAuth::parseToken()->refresh();

                return $this->createNewToken($token, 'Refresh token successfully');
            } else {
                return jsonResponse(null, 401, 'Unauthorized');
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not refresh token'], 403);
        }
    }

    /**
     * Log the user out (Invalid token)
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();

        return jsonResponse(null, 200, 'Logout successfully')
            ->withCookie(
                Cookie::make('access_token', null, -1)
            )->withCookie(
                Cookie::make('logged_in', null, -1)
            )->withCookie(
                Cookie::make('refresh_token', null, -1)
            );
    }
}
