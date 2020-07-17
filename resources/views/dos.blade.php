@extends('plantilla')

@section('titulo')
dos
@endsection

@section('seccion')
<a href="{{ route('uno') }}">uno</a>
<a href="{{ route('dos') }}">dos</a>
<h1>dos</h1>
@endsection