@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Поставщики</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Добавить поставщика</a>
    <table class="table">
        <thead>
            <tr>
                <th>Название</th>
                <th>Адрес</th>
                <th>Телефон</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->название_пост }}</td>
                <td>{{ $supplier->адрес_пост }}</td>
                <td>{{ $supplier->телефон }}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-primary">Редактировать</a>
                    <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST">
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
