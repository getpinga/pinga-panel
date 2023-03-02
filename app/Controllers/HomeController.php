<?php

namespace App\Controllers;

use App\Models\User;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;

class HomeController extends Controller
{
	public function index(Request $request, Response $response)
	{
        return view($response,'index.twig');
	}

    public function dashboard(Request $request, Response $response)
    {
        $userModel = new User($this->container->get('db'));
        $users = $userModel->getAllUsers();
        return view($response,'admin/dashboard/index.twig', compact('users'));
    }
}
