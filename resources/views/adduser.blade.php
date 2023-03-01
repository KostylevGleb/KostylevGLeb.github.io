@extends('layouts.main')

@section('content')
    <div class="container">
        <form class="form-control box" action="{{ route('addUser') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label class="form-label" for="name">ФИО</label>
            <input class="form-control" type="text" name="name" required>
            <label class="form-label" for="login">Логин</label>
            <input class="form-control" type="text" name="login" required>
            <label class="form-label" for="password">Пароль</label>
            <input class="form-control" type="password" name="password" required><br>
            <input class="button" type="submit" value="Добавить">
        </form>
    </div>
@endsection
