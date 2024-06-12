@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавить поставщика</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="название_пост">Название</label>
            <input type="text" class="form-control" id="название_пост" name="название_пост" required>
        </div>
        <div class="form-group">
            <label for="адрес_пост">Адрес</label>
            <input type="text" class="form-control" id="адрес_пост" name="адрес_пост" required>
        </div>
        <div class="form-group">
            <label for="телефон">Телефон</label>
            <input type="text" class="form-control" id="телефон" name="телефон" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
