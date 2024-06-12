<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books; // Предполагается, что вы создали модель Book
use App\Models\Publishers;
use App\Models\Suppliers;
use App\Models\Authors;
use App\Models\Pages;
use App\Models\Orders;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function addToCart(Request $request, $id)
    {
        $book = Books::find($id);
    
        if(!$book) {
            abort(404);
        }
        
        $cart = session()->get('cart');
        
        // если корзина пуста, то это первый продукт
        if(!$cart) {
            $cart = [
                    $id => [
                        "название" => $book->название,
                        "количество" => 1,
                        "цена" => $book->цена,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Книга успешно добавлена в корзину!');
        }
    
        // если корзина не пуста, то проверяем, есть ли уже такой товар
        if(isset($cart[$id])) {
            $cart[$id]['количество']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Книга успешно добавлена в корзину!');
        }
    
        // если товара нет в корзине, то добавляем его в корзину с количеством 1
        $cart[$id] = [
            "название" => $book->название,
            "количество" => 1,
            "цена" => $book->цена,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Книга успешно добавлена в корзину!');
    }
    
    public function removeFromCart(Request $request, $id)
    {
        $cart = session()->get('cart');
    
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
    
        return redirect()->back()->with('success', 'Книга успешно удалена из корзины!');
    }
    public function addOrder(Request $request)
    {
        $cart = session()->get('cart');
        $total = 0;
    
        foreach($cart as $id => $details){
            $total += $details['цена'] * $details['количество'];
    
            $order = new Orders;
            $order->код_покупателя = auth()->user()->id; // предполагая, что пользователь вошел в систему
            $order->код_книги = $id; // код книги
            $order->{'кол-во_заказов'} = $details['количество']; // количество заказанных книг
            $order->дата_заказа = date('Y-m-d'); // текущая дата
            $order->сумма = $details['цена'] * $details['количество']; // стоимость этой книги
            $order->save();
        }
    
        session()->forget('cart'); // очистить корзину после оформления заказа
    
        return redirect()->back()->with('success', 'Заказ успешно оформлен!');
    }
    
    public function showOrders()
{
    $orders = Orders::with('books')->get();
    return view('ords', compact('orders')); // Передаем заказы в представление
}

    
    
}
