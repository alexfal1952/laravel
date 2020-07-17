@extends('plantilla')

@section('titulo')
Uno
@endsection

@section('seccion')
<a href="{{ route('uno') }}">uno</a>
<a href="{{ route('dos') }}">dos</a>
<h1>Uno</h1>
@endsection