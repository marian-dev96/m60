<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class ClientController extends Controller
{

    public function index()
    {

        $id_user = Order::all()->max('id')+1;
            
            //test
            if(empty($id_user) || $id_user==1){
                $id_user = '1';
            }


        $data = [
            'id' => $id_user
        ];


        return view('client/client_index', $data);
    }


    public function step1(Request $request)
    {

        $data = [
            'id' => $request->id
        ];


        return view('client/client_step1', $data);
    }

    

    public function step2()
    {
        return view('client/client_step2');
    }
}
