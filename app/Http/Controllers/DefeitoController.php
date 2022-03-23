<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DefeitoController extends Controller
{
    public function index()
    {
        $lancamentos = DB::table('FLASHQLDEFEITO')->get();

        return $lancamentos;
    }

    public function descricao($codigo)
    {
        $descricao = DB::table('FLASHQLDEFEITO')->where('codDefeito', $codigo)->get();

        return $descricao;
    }
}
