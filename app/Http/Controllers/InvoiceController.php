<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index()
    { 
        return DB::table('invoices')->get();
    }

    public function store() {
    
    }

    public function update() {
    
    }
}
