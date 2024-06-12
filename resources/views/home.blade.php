@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Добро пожаловать в наш книжный магазин!</h1>
        <p class="lead">Здесь вы найдете книги на любой вкус и цвет.</p>
        <hr class="my-4">
        <p>Начните свое путешествие в мир литературы прямо сейчас.</p>
        <a class="btn btn-primary btn-lg" href="/viewBooks" role="button">Перейти в каталог</a>
    </div>
</div>
@endsection
