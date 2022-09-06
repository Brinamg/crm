@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('parts.public-navbar')
@endsection

@section('content')
<div class="container">
    @component('components.title', ['title' => "Relatorio de vendas - $mes/$ano"])
        @include('components.breadcrumb', ['links' => [
           ['nome' => 'Home', 'valor' => "http://site/secao/pagina.php"],
           ['nome' => 'Vendas', 'valor' => "http://site/secao/pagina.php"],
           ['nome' => 'Eletrônico', 'valor' => "http://site/secao/pagina.php"],
           ['nome' => 'Informática', 'valor' => "http://site/secao/pagina.php"],     
        ]])
    @endcomponent
    @include('components.table')
</div>
@endsection