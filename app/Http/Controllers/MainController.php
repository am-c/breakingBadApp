<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {

      $api_data = collect(Http::get('https://www.breakingbadapi.com/api/characters')->json());
      return view('welcome')
        ->with('api_data', $api_data);
    }
}