<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer App</title>
</head>

<body>
    <h1>Mi primer app</h1>

    @if (isset($dato) && !is_null($dato))
        <h2>Dato: {{ $dato }}</h2>
    @else
        <h2>Dato: No especificado</h2>
    @endif

    @foreach ($hobbies as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach

    @for ($i = 0; $i < 13; $i++)
        {{ $dato . ' X ' . $i . ' = ' . $dato * $i }} <br>
    @endfor

    <br>

    <?php $i = 0; ?>
    @while ($i < 13)
        {{ $dato . ' X ' . $i . ' = ' . $dato * $i }} <br>
        <?php $i++; ?>
    @endwhile

</body>

</html>
