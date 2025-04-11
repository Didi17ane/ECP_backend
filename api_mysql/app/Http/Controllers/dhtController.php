<?php

namespace App\Http\Controllers;
use App\Models\dht;

use Illuminate\Http\Request;

class dhtController extends Controller
{
    public function index()
    {
        $dhts = dht::all();
        return response()->json($dhts);
    }

    public function store(Request $request)
    {
        // Log::error('Test error message');
        // dd($request);
        #console.log("okkkkkkk");
        $fields = $request->validate([
            'temperature'=> ['required', 'numeric'],
            'humidite'=> ['required', 'numeric'],
        ]);
        #dd($fields);

        $qual= dht::create([
            'temperature'=> $fields['temperature'],
            'humidite'=> $fields['humidite'],
        ]);
        // $qual->save();
        return response()->json([
            "message" => "Data saved."
        ], 201);
    }
}
