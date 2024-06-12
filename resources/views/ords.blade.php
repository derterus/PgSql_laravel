@extends('layouts.app')

@section('content')
<div class="unique-container">
    <div class="unique-row justify-content-center">
        <div class="unique-col-md-8">
            @if($orders)
                @php $total = 0 @endphp
                @foreach($orders as $order)
                    @php $total += $order->сумма @endphp
                    <div class="unique-card">
                        <div class="unique-card-header">{{ $order->код_заказа }}</div>

                        <div class="unique-card-body">
                            <p>Покупатель: {{ $order->код_покупателя }}</p>
                            <p>Книга: {{ $order->books->название }}</p>
                            <p>Количество заказов: {{ $order->кол_во_заказов }}</p>
                            <p>Дата заказа: {{ $order->дата_заказа }}</p>
                            <p>Сумма: {{ $order->сумма }}</p>
                        </div>
                    </div>
                @endforeach
                <h3 class="unique-total">Общая стоимость всех заказов: {{ $total }}</h3>
            @else
                <p class="unique-no-orders">У вас пока нет заказов!</p>
            @endif
        </div>
    </div>
</div>
@endsection
