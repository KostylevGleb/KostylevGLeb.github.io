@extends('layouts.main')

@section('content')
    <h1>Документация</h1>
    <a href={{ route('docall') }}>Все</a>
    <a href={{ route('docindustry') }}>Отраслевые ПОТЭЭ</a>
@endsection
