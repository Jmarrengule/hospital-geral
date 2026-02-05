<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        return Medico::all();
    }

    public function store(Request $request)
    {
        return Medico::create($request->all());
    }
}
