@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать издательство</h1>
    <form action="{{ route('publishers.update', $publisher) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="название">Название</label>
            <input type="text" class="form-control" id="название" name="название" value="{{ $publisher->название }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
