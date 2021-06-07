<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PortafolioController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::paginate();
        return view('welcome', compact('proyectos'));
    }

}



