<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


/**
 * @SWG\Post(
 *   path="/api/auth/login",
 *   summary="Get Token",
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=401, description="Unauthorized"),
 *   @SWG\Response(response=500, description="internal server error"),
 * 		@SWG\Parameter(
 *          name="email",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),
 * 		@SWG\Parameter(
 *          name="password",
 *          in="formData",
 *          required=true,
 *          type="string"
 *      ),
 * )
 *
 */


class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

}
