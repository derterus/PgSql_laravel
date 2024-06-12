@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать поставщика</h1>
    <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="название_пост">Название</label>
            <input type="text" class="form-control" id="название_пост" name="название_пост" value="{{ $supplier->название_пост }}" required>
        </div>
        <div class="form-group">
            <label for="адрес_пост">Адрес</label>
            <input type="text" class="form-control" id="адрес_пост" name="адрес_пост" value="{{ $supplier->адрес_пост }}" required>
        </div>
        <div class="form-group">
            <label for="телефон">Телефон</label>
            <input type="text" class="form-control" id="телефон" name="телефон" value="{{ $supplier->телефон }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
