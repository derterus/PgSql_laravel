@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4"> <!-- Карточки занимают 1/3 ширины экрана -->
            <div class="card book-card">
                <div class="card-header">{{ $book->название }}</div>

                <div class="card-body">
                    <p>Автор: {{ $book->author->имя }}</p>
                    <p>Издатель: {{ $book->publisher->название }}</p>
                    <p>Поставщик: {{ $book->supplier->название_пост }}</p>
                    <p>Год издания: {{ $book->год_издания }}</p>
                    <p>Количество: {{ $book->кол_во }}</p>
                    <p>Цена: {{ $book->цена }}</p>

                    <form action="/cartAdd/{{$book->Код_книги}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Добавить в корзину</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
