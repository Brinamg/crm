<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasController extends Controller
{
    //cada membro de um cotrolador gera uma página
   public function relatorio($mes, $ano){
    echo "mes: $mes - ano: $ano<br>";
    return view('site.vendas', ['mes' => $mes, 'ano' => $ano]);
   }

   public function produtos(){
    echo 'Lista de produtos da empresa';
   }

   public function checkout(){
    echo 'Página de registro das vendas';
   }
    
}
