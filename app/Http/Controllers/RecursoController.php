<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecursoController extends Controller
{
    private $quarkusUrl = 'http://localhost:8080/api/recurso';
    
    public function index()
    {
        $response = Http::get($this->quarkusUrl);
        $recursos = $response->json();
        return view('recursos.index', compact('recursos'));
    }
    
    public function create()
    {
        return view('recursos.create');
    }
    
    public function store(Request $request)
    {
        $data = [
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ];
        
        $response = Http::post($this->quarkusUrl, $data);
        return redirect()->route('recursos.index');
    }
}