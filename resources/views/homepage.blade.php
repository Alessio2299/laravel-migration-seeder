<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homepage</title>
    </head>
    <body>
        <h1>Homepage</h1>
        <ul>
            @foreach ($travels as $travel)
            <li>{{$travel->name}}</li>
            <li>{{$travel->image}}</li>
            <li>{{$travel->description}}</li>
            <li>{{$travel->place}}</li>
            <li>{{$travel->date}}</li>
            <li>{{$travel->price}}</li>
            <li>{{$travel->available}}</li>
            @endforeach
        </ul>
    </body>
</html>