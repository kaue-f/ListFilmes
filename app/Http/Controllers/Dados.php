<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\filme;
use DateTime;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class Dados extends Controller
{
    public function dados(Request $request){

        $dados = new filme();

            $dados->titulo = $request->titulo;
            
            $dados->capa = $request->capa;
            
            $dados->lancamento = $request->lancamento;
            
            $duracao = new DateTime("01-01-2023".$request->duracao);
            $dados->duracao = $duracao;

            $dados->genero = $request->genero;

            $dados->classificacao = $request->classificacao;
            
            $dados->sinopse = $request->sinopse;

            $dados->id_user = auth()->user()->id;

            $dados->save();

        return redirect(route('adicionar'));
    }
}
