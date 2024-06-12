@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать автора</h1>
    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="фамилия">Фамилия</label>
            <input type="text" class="form-control" id="фамилия" name="фамилия" value="{{ $author->фамилия }}" required>
        </div>
        <div class="form-group">
            <label for="имя">Имя</label>
            <input type="text" class="form-control" id="имя" name="имя" value="{{ $author->имя }}" required>
        </div>
        <div class="form-group">
            <label for="отчество">Отчество</label>
            <input type="text" class="form-control" id="отчество" name="отчество" value="{{ $author->отчество }}" required>
        </div>
        <div class="form-group">
            <label for="дата_рождения">Дата рождения</label>
            <input type="date" class="form-control" id="дата_рождения" name="дата_рождения" value="{{ $author->дата_рождения }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
