<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index page</h1>
    @foreach ($athletes as $athlete)
        <h2>ID: {{$athlete['id']}}</h2>
        <h1>Name: {{$athlete['name']}}</h1>
        <h2>Genre: {{$athlete['genre']}}</h2>
        @if ($athlete->nation)
            <p>{{$athlete->nation['name']}}</p>       
        @endif

        @forelse ($athlete->categories as $category)
            {{ $category['name'] }}
        @empty
        @endforelse  

        <a href="{{route('admin.athletes.show', ['athlete'=>$athlete->id]) }}">details</a>
            
        <hr>
    @endforeach
    
</body>
</html>