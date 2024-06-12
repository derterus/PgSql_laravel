@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Авторы</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Добавить автора</a>
    <table class="table">
        <thead>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Дата рождения</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->фамилия }}</td>
                <td>{{ $author->имя }}</td>
                <td>{{ $author->отчество }}</td>
                <td>{{ $author->дата_рождения }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author) }}" class="btn btn-primary">Редактировать</a>
                    <form action="{{ route('authors.destroy', $author) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
