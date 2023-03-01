@extends('layouts.main')

@section('content')
    <h1>Личный кабинет</h1>
    <div class="container_home">
        @auth
            <h3>{{ Auth::user()->name }}</h3>
            @if(\Illuminate\Support\Facades\Auth::user()->roll ==1)
                <a href="{{ route('addUserShow') }}" class="but">Добавить сотрудника</a><br><br>
            @endif
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input class="button" type="submit" value="Выход">
            </form>
        @endauth
    </div>
@endsection
