<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>Homepage</title>
  </head>
  <body>
    <h1>Homepage</h1>
    <div class="content">
      @foreach ($travels as $travel)
      <div class="cardTravel">
        <h2>{{$travel->name}}</h2>
        <img src="{{$travel->image}}" alt="{{$travel->place}}">
        <div class="info">
          <span class="place">{{$travel->place}}</span>
          <span class="date">{{$travel->date}}</span>
          @if ($travel->available == 1)
            {{$travel->available = "Available"}}    
          @else
            {{$travel->available = "Not Available"}}
          @endif
        </div>
        <p>{{$travel->description}}</p>
        <div class="buy">
          <span class="price">{{$travel->price}} €</span>
          <button>Prenota</button>
        </div>
      </div>
      @endforeach
    </div>

  </body>
</html>