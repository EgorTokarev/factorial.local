<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Factorial</title>
    </head>
    <body>

        <!-- Результат -->
        <p>
            <b>Результат</b>: {{ $factorial ?? '' }}
        </p>
        <!-- Форма для передачи данных -->
        <form action="{{ route('factorial') }}" method="post">
            @csrf
            <label for="number">Factorial</label>
            <input type="text" name="number" id="number"
            value="{{ $number ?? old('number') }}">
            <button type="submit">Вычислить</button>
        </form>
        <!-- Ошибки -->
    </body>
</html>