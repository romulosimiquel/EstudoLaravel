@extends('site.templates.template1')

@section('content')

<h1>Home Page do Site - Teste</h1>
{{$teste = 'Não existe'}} - - {{$teste2}} - - {{$teste3}} -- <!-- {!! $xss !!} -->

</br>

@if( $var1 == '123' )
<p>É igual</p>
@else
<p>É diferente</p>
@endif

@unless( $var1 == '123' )
<p>É diferente</p>
@endunless

@for( $i = $valor; $i < 10; $i++ )
	<p>Valor: {{$i}}</p>
@endfor

@forelse( $arrayData as $array )
	<p>Valor: {{$array}}</p>
@empty
	<p>Não existe itens</p>
@endforelse

@php
@endphp

@include ('site.includes.sidebar', compact('var1'))


@endsection

@push('scripts')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

@endpush