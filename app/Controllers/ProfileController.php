<?php

namespace App\Controllers;

use App\Models\User;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;

class ProfileController extends Controller
{
	public function profile(Request $request, Response $response)
	{
		$username = $_SESSION['auth_username'];
		$email = $_SESSION['auth_email'];
        return view($response,'admin/profile/profile.twig',['email' => $email, 'username' => $username]);
	}

}
