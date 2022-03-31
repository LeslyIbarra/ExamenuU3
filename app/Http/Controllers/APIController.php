<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nationalize.io/?name[]=michael&name[]=matthew&name[]=jane');
        $datos = json_decode($response->getBody()->getContents(), true);

        $info = [];
        foreach ($datos as $item) {
            $info[] = [
                'nombre' => $item['name'],
                'pais' => $item['country']
            ];
        }

        return view('blog.api',['info' => $info]);
    }
}
