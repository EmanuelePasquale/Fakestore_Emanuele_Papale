<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class StoreController extends Controller
{
    public static $baseUrl = 'https://dummyjson.com/products';
    public function index() {
        $response = Http::withoutVerifying()->get(self::$baseUrl)->json();
        return view('index',compact('response'));
    }

    public function show($id){
        $response = Http::withoutVerifying()->get(self::$baseUrl . '/' . $id )->json();
        return view('show',compact('response'));
    }
}
