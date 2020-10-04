<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    { 
        return Client::all();
    }

    public function show(int $id) {
        return Client::find($id);
    }

    public function store() {
    
    }

    public function update() {
    
    }
}
