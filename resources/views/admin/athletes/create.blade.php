<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Crea un nuovo atleta</h1>
        <form action="{{ route('admin.athletes.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" name="genre" id="genre">
            </div>
            
            <select name="nation" class="form-select" aria-label="Default select example">
                @foreach ($nations as $nation)                  
                <option value="{{ $nation->id }}">{{ $nation->name }}</option>
                @endforeach
            </select>

                @foreach ($categories as $category)                  
                <div class="form-check">
                    <input name="categories[]" class="form-check-input" type="checkbox" value="{{$category->id}}" id="tag-{{$category->id}}">
                    <label class="form-check-label" for="flexCheckDefault">
                      {{$category->name}}
                    </label>
                  </div>              
                @endforeach


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>