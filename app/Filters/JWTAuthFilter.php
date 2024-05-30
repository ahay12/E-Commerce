<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        try {
            $token = $request->getHeader('Authorization');
            if (!$token) {
                return $this->respondUnauthorized('Token is required');
            }

            JWTAuth::parseToken($token);
        } catch (\Exception $e) {
            return $this;
        }
    }
}