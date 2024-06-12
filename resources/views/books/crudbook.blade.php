@extends('layouts.app')

@section('content')
<div class="custom-book-container">
    <div class="custom-book-content">
            <div class="custom-book-header">Книги</div>

            <div class="custom-book-body">
                <a href="/home/createBook" class="custom-book-btn-create">Создать книгу</a>
                <table class="custom-book-table">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Автор</th>
                            <th>Год издания</th>
                            <th>Цена</th>
                            <th>Раздел</th>
                            <th>Поставщик</th>
                            <th>Издательство</th>
                            <th>Количество</th>
                            <th>Дата поставки</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td class="editable edit-field" data-column="название">{{ $book->название }}</td>
                                <td class="editable edit-field" data-column="код_автора">
                                    <select disabled>
                                        @foreach (App\Models\Authors::all() as $author)
                                            <option value="{{ $author->код_автора }}" {{ $book->код_автора == $author->код_автора ? 'selected' : '' }}>
                                                {{ $author->имя }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="editable edit-field" data-column="год_издания">
                                    <input type="date" value="{{ date('Y-m-d', strtotime($book->год_издания)) }}" disabled>
                                </td>
                                <td class="editable edit-field" data-column="цена">{{ $book->цена }}</td>
                                <td class="editable edit-field" data-column="код_раздел">
                                    <select disabled>
                                        @foreach (App\Models\Pages::all() as $page)
                                            <option value="{{ $page->код_раздела }}" {{ $book->код_раздел == $page->код_раздела ? 'selected' : '' }}>
                                                {{ $page->раздел }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                
                                <td class="editable edit-field" data-column="код_поставщика">
                                    <select disabled>
                                        @foreach (App\Models\Suppliers::all() as $supplier)
                                            <option value="{{ $supplier->код_поставщика }}" {{ $book->код_поставщика == $supplier->код_поставщика ? 'selected' : '' }}>
                                                {{ $supplier->название_пост }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="editable edit-field" data-column="код_издательства">
                                    <select disabled>
                                        @foreach (App\Models\Publishers::all() as $publisher)
                                            <option value="{{ $publisher->код_издательства }}" {{ $book->код_издательства == $publisher->код_издательства ? 'selected' : '' }}>
                                                {{ $publisher->название }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="editable edit-field" data-column="кол_во">{{ $book->кол_во }}</td>
                                <td class="editable edit-field" data-column="дата_поставки">
                                    <input type="date" value="{{ $book->дата_поставки }}" disabled>
                                </td>
                                <td>
                                    <button class="book-btn-edit" data-id="{{ $book->id }}">Редактировать</button>
                                    <button class="book-btn-save d-none" data-id="{{ $book->Код_книги }}">Сохранить</button>
                                    <form action="/deleteBook/{{ $book->Код_книги }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="book-btn-delete">Удалить</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.book-btn-edit').click(function() {
        var id = $(this).data('id');
        $(this).closest('tr').find('td.edit-field').attr('contenteditable', 'true');
        $(this).closest('tr').find('select').prop('disabled', false);
        $(this).closest('tr').find('input[type="date"]').prop('disabled', false);
        $(this).addClass('d-none');
        $(this).siblings('.book-btn-save').removeClass('d-none');
    });

$('.book-btn-save').click(function() {
    var id = $(this).data('id');
    var data = {};
    $(this).closest('tr').find('td.editable').each(function() {
        var column = $(this).data('column');
        var editval;
        if ($(this).find('select').length > 0) { // Если это выпадающий список
            editval = $(this).find('select').val(); // Получить значение выбранного элемента
        } else if ($(this).find('input[type="date"]').length > 0) { // Если это поле ввода даты
            editval = $(this).find('input[type="date"]').val(); // Получить значение даты
        } else {
            editval = $(this).text(); // Иначе, получить текстовое значение
        }
        console.log(editval);
        data[column] = editval;
    });
    console.log(data);
    $.ajax({
        url: "/books/edit/"+id,
        type: "POST",
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
        },
        
        error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
    });

    $('tr td.edit-field').attr('contenteditable', 'false');
    $(this).closest('tr').find('select').prop('disabled', true);
    $(this).closest('tr').find('input[type="date"]').prop('disabled', true);
    $(this).addClass('d-none');
    $(this).siblings('.book-btn-edit').removeClass('d-none');
});

});
</script>
@endsection
