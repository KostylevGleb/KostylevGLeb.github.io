@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="error">
            <h1>404</h1>
            <h2>Страница не найдена</h2>
            <a href={{ route('home') }}>Личный кабинет</a>
        </div>
    </div>
@endsection