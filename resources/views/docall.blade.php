@extends('layouts.main')

@section('content')
    <h1>Документация</h1>
    <div class="doc_menu">
        <a class="chek" href={{ route('docall') }}>Все</a>
        <a href={{ route('docindustry') }}>Отраслевые ПОТЭЭ</a>
        <a href={{ route('doccorporate') }}>Корпоративные</a>
    </div>
    <div class="document_fon">
        @foreach($documents as $document)
            <div class="document_items">
                <a href="documents/{{$document->url}}" target="_blank">{{$document->name}}</a>
            </div>
        @endforeach
    </div>
@endsection
