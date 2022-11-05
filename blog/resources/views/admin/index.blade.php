<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    {{-- <link href="css/style.css" type="text/css" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/adminStyle.css') }}" type="text/css" rel="stylesheet" media="all">
</head>
<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" arialabel="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
        </div>
    @endif

    <a class="navbar-brand" href="{{ url('/index') }}" style = "font-size: 20pt">Главная</a>
    <a href="{{ route('admin.create') }}" class = "change">Добавить</a>
    <br>
    <br>
    <hr>
    @foreach ($pizzas as $item)
        <img src="images/{{ $item->img }}" alt="" style = "height: 100px">
        <div>{{ $item->name }}</div>
        <div>{{ $item->price }}</div>
        <div>{{ $item->description }}</div>
        <div>{{ $item->img }}</div>
        <div>{{ $item->name }}</div>
        <a href="{{ route('admin.edit', ['id' => $item->id]) }}" class = "change">Изменить</a>
        <form action="{{ route('admin.destroy', ['id' => $item->id]) }}" method="post" onsubmit="return confirm('Удалить этоу пиццу?')" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" class="change" value="Удалить">
        </form>
        <hr>
    @endforeach
</body>
</html>