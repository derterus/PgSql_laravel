@extends('layouts.app')

@section('content')
<div class="cart-container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="cart-content">
        @if(session('cart'))
            @php $total = 0 @endphp
            @foreach(session('cart') as $id => $details)
                @php $total += $details['цена'] * $details['количество'] @endphp
                <div class="cart-item">
                    <h3 class="item-title">{{ $details['название'] }}</h3>
                    <p>Количество: {{ $details['количество'] }}</p>
                    <p>Цена: {{ $details['цена'] }}</p>
                    <p>Общая стоимость: {{ $details['цена'] * $details['количество'] }}</p>
                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        <button type="submit" class="cart-btn-remove">Удалить из корзины</button>
                    </form>
                </div>
            @endforeach
            <h3>Общая стоимость заказа: {{ $total }}</h3>
            <button id="checkout-button" class="cart-btn-checkout">Оформить заказ</button>
            @else
            <div class="cart-empty"> 
                <h2>Ваша корзина пуста!</h2>
                <a class="cart-btn-catalog" href="/viewBooks" role="button">Перейти в каталог</a>
            </div>
            @endif
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('checkout-button').onclick = function(){
    Swal.fire({
        title: 'Оплата',
        text: "Вы уверены, что хотите оформить заказ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Да, оформить!'
    }).then((result) => {
        if (result.isConfirmed) {
            var data = {
                '_token': '{{ csrf_token() }}'
            };

            $.ajax({
                type: 'GET',
                url: '/order',
                data: data,
                success: function(response) {
                    Swal.fire('Успех!', 'Ваш заказ был успешно оформлен!', 'success');
                },
                error: function(response) {
                    Swal.fire('Ошибка!', 'Что-то пошло не так при оформлении заказа.', 'error');
                }
            });
        }
    })
};
</script>


@endsection
