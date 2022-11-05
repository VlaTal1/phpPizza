<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <form action="{{ route('admin.update', ['id' => $pizza->id])}}">
        @method('PATCH')
        <input type="hidden" name = "pizzaId" value = "{{ $pizza->id }}">
        <div>Название: </div>
        <input type="text" value = "{{ $pizza->name }}" name = "name">
        <div>Цена: </div>
        <input type="text" value = "{{ $pizza->price }}" name = "price">
        <div>Описание: </div>
        <textarea name="" id="" cols="30" rows="10" name = "description">{{ $pizza->description }}</textarea>
        <div>Картинка: </div>
        <input type="file" name = "image" value = "images/{{ $pizza->img }}">
        <button type="submit" class = "change">Обновить</button>
    </form>
</body>
</html>