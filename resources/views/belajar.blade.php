<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('navigation.navigation')

    <p> My Name is {{ $name }} </p>
    
    <p> My Name is {!! $name !!}</p>

    
    <!-- penulisan syntax <?= $name ?> = {{ $name }} (penulisan syntax di blade) -->
    <!-- apabila mempassing elemen html dalam data ke dalam penulisan syntax blade, dengan cara berikut {!! $name !!} -->
</body>
</html>