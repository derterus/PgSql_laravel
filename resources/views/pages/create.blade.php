@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добавить раздел</h1>
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="раздел">Раздел</label>
            <input type="text" class="form-control" id="раздел" name="раздел" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
