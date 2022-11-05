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
    <form action="{{ route('admin.store') }}">
        <div>Название: </div>
        <input type="text" name = "name">
        <div>Цена: </div>
        <input type="text" name = "price">
        <div>Описание: </div>
        <textarea name="" id="" cols="30" rows="10" name = "description"></textarea>
        <div>Картинка: </div>
        <input type="file" name = "image">
        <button type="submit" class = "change">Создать</button>
    </form>
</body>
</html>