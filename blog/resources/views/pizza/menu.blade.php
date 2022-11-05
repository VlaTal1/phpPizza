@extends('layout.site')
@section('content')
    <div class = "pizza-menu">
		<p>Menu</p>
        <div class="container">
			@foreach ($pizzas as $item)
				<div class="pizza">
					<img src="images/{{ $item->img }}" alt="" class="menu-img">
					<div class = "pizza-name">{{ $item->name }}</div>
					<div class = "pizza-desc">{{ $item->description }}</div>
					<div class = "pizza-price">₴{{ $item->price }}</div>
					<a href="/show/{{ $item->id }}" style = "text-decoration: none;"><button type="button" class="showPizza" style = "width: 18%">Просмотреть</button></a>
				</div>
			@endforeach
			
        </div>
    </div>
@endsection