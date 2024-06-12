@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать раздел</h1>
    <form action="{{ route('pages.update', $page) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="раздел">Раздел</label>
            <input type="text" class="form-control" id="раздел" name="раздел" value="{{ $page->раздел }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
