@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Разделы</h1>
    <a href="{{ route('pages.create') }}" class="btn btn-primary">Добавить раздел</a>
    <table class="table">
        <thead>
            <tr>
                <th>Раздел</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr>
                <td>{{ $page->раздел }}</td>
                <td>
                    <a href="{{ route('pages.edit', $page) }}" class="btn btn-primary">Редактировать</a>
                    <form action="{{ route('pages.destroy', $page) }}" method="POST">
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
