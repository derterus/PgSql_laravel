@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Издательства</h1>
    <a href="{{ route('publishers.create') }}" class="btn btn-primary">Добавить издательство</a>
    <table class="table">
        <thead>
            <tr>
                <th>Название</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publishers as $publisher)
            <tr>
                <td>{{ $publisher->название }}</td>
                <td>
                    <a href="{{ route('publishers.edit', $publisher) }}" class="btn btn-primary">Редактировать</a>
                    <form action="{{ route('publishers.destroy', $publisher) }}" method="POST">
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
