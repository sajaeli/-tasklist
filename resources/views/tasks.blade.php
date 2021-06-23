<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         
    </head>
    <body>
        <ul>
            
               {{-- <?php foreach ($tasks as $key => $task): ?>
                    <li><a href="{{ 'show/'. $key}}"><?php echo $task ?></a></li>
               <?php endforeach; ?> --}}
            @foreach ($tasks as $task)
                <li><a href="tasks/show/{{ $task->id }}">{{ $task->title }}</a></li>
            @endforeach
        </ul>
    </body>
</html>
