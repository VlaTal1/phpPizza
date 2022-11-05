@extends('layout.site')
@section('content')    
    <div class = "pizza-menu">
        <div class="container">
            <div class = "pizza-show-name">{{ $pizza->name }}</div>
            <div class="pizza-show">
                <img src="/images/{{ $pizza->img }}" alt="" class="show-img">
                <div class = "pizza-show-desc">{{ $pizza->description }}</div>
                <div class = "pizza-show-price">₴{{ $pizza->price }}</div>
                <form action="/api/order/create" method="POST">
                    <input type="hidden" name = "pizzaId" value = "{{ $pizza->id }}">
                    <div>Количество: </div>
                    <input class="pizza-amount" autocomplete="off" type="number" value="1" name="amount" min = "1" required>
                    <br>
                    <div>Дата доставки: </div>
                    <input type="date" name = "deliveryDate" required>
                    <br> 
                    <div>Номер телефона: </div>
                    @if (Auth::check())
                        <input type="tel" name = "phone" pattern="[0-9]{10}" required value = "{{ Auth::user()->phone }}">
                    @else
                        <input type="tel" name = "phone" pattern="[0-9]{10}" required>
                    @endif
                    <br>
                    <br>
                    <button type="submit" class="order" style = "width: 18%">Заказать</button>
                </form>
            </div>
            <hr style = "margin-bottom: 40px;">
        </div>
    </div>
    <div class = "reviews-block">
        <div class="container">
            <div class = "reviews">
                @if (count($reviews) > 0)
                    @foreach ($reviews as $item)
                        <div style = "font-size: 24pt;">{{ $item->name }}:</div>
                        <div style = "font-size: 16pt;">{{ $item->review }}</div>
                        <hr class = "hr2">
                    @endforeach       
                @else
                    <div style = "font-size: 24pt;">Здесь пока нет отзывов(</div>
                @endif
            </div>
            <div class = "review-form">
                <div class = "text1">Оставьте свой отзыв!</div>
                <form action="/api/review/create" method="POST">
                    <input type="hidden" name = "pizza_id" value = "{{ $pizza->id }}">

                    <div class = "review-text">Имя: </div>
                    <input type="text" name = "name" class = "name" required>

                    <div class = "review-text">Отзыв: </div>
                    <textarea name = "review" class = "review" rows = "5" cols = "60" required></textarea>

                    <button type = "submit" class = "send-review">Оставить отзыв</button>
                </form>
            </div>
        </div>
    </div>
@endsection