@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавить издательство</h1>
    <form action="{{ route('publishers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="название">Название</label>
            <input type="text" class="form-control" id="название" name="название" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection