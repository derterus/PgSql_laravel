@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавить автора</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="фамилия">Фамилия</label>
            <input type="text" class="form-control" id="фамилия" name="фамилия" required>
        </div>
        <div class="form-group">
            <label for="имя">Имя</label>
            <input type="text" class="form-control" id="имя" name="имя" required>
        </div>
        <div class="form-group">
            <label for="отчество">Отчество</label>
            <input type="text" class="form-control" id="отчество" name="отчество" required>
        </div>
        <div class="form-group">
            <label for="дата_рождения">Дата рождения</label>
            <input type="date" class="form-control" id="дата_рождения" name="дата_рождения" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
