<?php

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Authenticator for Security and valid API Token check.
 * Implement as Middleware for APIs
 *
 */
require_once __DIR__ . '/Configuration.php';

class Authenticator
{
	public function __construct()
	{
		
	}
	
	public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $app)
	{
		return $app($request, $response);
	}
}

