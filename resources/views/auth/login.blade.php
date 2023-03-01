@extends('layouts.auth')

@section('content')
    <h1>Авторизация</h1>
    <form class="form-control box" method="POST" action="{{ route('login') }}">
        @csrf
        <label for="login" class="form-label">Логин</label>
        <input id="login" type="text" class="form-control" name="login" required>
        <label for="password" class="form-label">Пароль</label>
        <input id="password" type="password" class="form-control" name="password" required><br>
        <input class="button" type="submit" value="Войти">
    </form>
@endsection
