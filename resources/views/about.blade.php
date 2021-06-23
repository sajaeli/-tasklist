<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2>name : {{ $name }}</h2>
                {{-- <h2>age  : {{ $age }}</h2> --}}

                <form action="send" method="post">
                    @csrf
                    <input type="text" name="myname">
                    <button type="submit">add</button>
                </form>
            </div>
        </div>
    </body>
</html>
