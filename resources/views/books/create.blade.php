<!-- resources/views/createbook.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <a href="/home/books">Назад</a>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Создание книги</div>

                <div class="card-body">
                    <form method="POST" action="/crbooks">
                        @csrf

                        <div class="form-group">
                            <label for="название">Название</label>
                            <input type="text" class="form-control" id="название" name="название">
                        </div>

                        <div class="form-group">
                            <label for="код_автора">Автор</label>
                            <select class="form-control" id="код_автора" name="код_автора">
                                @foreach (App\Models\Authors::all() as $author)
                                    <option value="{{ $author->код_автора }}">{{ $author->имя }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="год_издания">Год издания</label>
                            <input type="date" class="form-control" id="год_издания" name="год_издания">
                        </div>

                        <div class="form-group">
                            <label for="цена">Цена</label>
                            <input type="text" class="form-control" id="цена" name="цена">
                        </div>

                        <div class="form-group">
                            <label for="код_раздел">Раздел</label>
                            <select class="form-control" id="код_раздел" name="код_раздел">
                                @foreach (App\Models\Pages::all() as $page)
                                    <option value="{{ $page->код_раздела }}">{{ $page->раздел }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="код_поставщика">Поставщик</label>
                            <select class="form-control" id="код_поставщика" name="код_поставщика">
                                @foreach (App\Models\Suppliers::all() as $supplier)
                                    <                                    <option value="{{ $supplier->код_поставщика }}">{{ $supplier->название_пост }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="код_издательства">Издательство</label>
                                <select class="form-control" id="код_издательства" name="код_издательства">
                                    @foreach (App\Models\Publishers::all() as $publisher)
                                        <option value="{{ $publisher->код_издательства }}">{{ $publisher->название }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="кол_во">Количество</label>
                                <input type="text" class="form-control" id="кол_во" name="кол_во">
                            </div>
    
                            <div class="form-group">
                                <label for="дата_поставки">Дата поставки</label>
                                <input type="date" class="form-control" id="дата_поставки" name="дата_поставки">
                            </div>
    
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
                                    