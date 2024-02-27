<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Lara World</title>
</head>

<body>
    <ul>
        @foreach($arr as $elem)
        <li>{{ $elem }}</li>
        @endforeach
    </ul>

</body>

</html>