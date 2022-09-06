<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jumbo', function () {
    return view('site.jumbo');
});

Route::get('/login/{dia}/{mes}/{ano}', function ($dia, $mes, $ano) {
    return view('site.login', ['dia' => $dia, 'mes' => $mes, 'ano' => $ano]);
});

Route::get('/form', function () {
    return view('site.contato');
});

Route::get('/vendas/{mes}/{ano}', [VendasController::class, 'relatorio']);
Route::get('/vendas/produtos', [VendasController::class, 'produtos']);
Route::get('/vendas/checkout', [VendasController::class, 'checkout']);

