<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        return view('client/client_index');
    }

    public function step1()
    {
        return view('client/client_step1');
    }

    public function step2()
    {
        return view('client/client_step2');
    }
}
