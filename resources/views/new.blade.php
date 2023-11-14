<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body
        {
            padding: 30px;
        }
        .card
        {
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <div class="card w-50 p-4">
        <div class="col-12">
        <h1>Crear un nuevo artículo</h1>

        <form action="{{ route('articles.store') }}" method="get" id="search_form">
            @csrf
            <div class="form-group mb-4">
                <label for="title">Título</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="form-group mb-4">
                <label for="autor">Autor</label>
                <select name="author_id" id="autor" class="form-control">
                    <option value="0">Autor del artículo</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author['id'] }}">{{ $author['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="image">Imagen del artículo (URL)</label>
                <input class="form-control" type="text" name="image" id="image">
            </div>
            
            <div class="form group mb-4">
                <label for="content">Contenido</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>
            

            <button type="submit" class="btn btn-primary m-0">Guardar artículo</button>
        </form>
        </div>
    </div>

</body>
</html>