<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        h1
        {
            text-align: center;
        }
        .search_container
        {
            width: 50%;
            height: 50px;
            margin: 0 auto;
            margin-bottom: 50px;
        }
        .search_container input
        {
            width: 100%;
            height: 50px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        a
        {
            text-decoration: none;
            display: contents;
            
        }
        .card
        {
            height: 150px;
            margin: 0 auto;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin-bottom: 15px;
        }
        .btnNewArticle
        {
            position: fixed;
            width: 100px;
            height: 100px;
            border-radius: 100%;
            border: none;
            right: 20px;
            bottom: 20px;
            font-size: 42px;
            padding: 0;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2)
        }
        
    </style>

</head>
<body>

    <h1>Resultados de búsqueda para "{{ $data['keyword'] }}"</h1>


    <div class="search_container">
        <form action="{{ route('articles.search') }}" method="POST">
            @csrf
            <input type="text" name="keyword" id="keyword" placeholder="Buscar artículos">
        </form>
    </div>

    @foreach ($data['articles'] as $article)

    <a href="{{ route('articles.details', ['article_id' => $article['id']]) }}">
        <div class="card w-50 h-100">
            <div class="row">
                <div class="col-4" style="background-image: url('{{ $article['image'] }}'); background-size: cover; background-position: center;">
                    
                </div>

                <div class="col-8">
                    <h4>{{ $article['title'] }}</h4>
                    <p>{{ $article['name'] }}</p>
                    @if (strlen($article['content']) > 70)
                        <p>{{ substr($article['content'], 0, 70).'...' }}</p>
                    @else
                        <p>{{ $article['content'] }}</p>
                    @endif
                </div>
                
            </div>
            
        </div>
    </a>
    
    @endforeach

    <a href="{{ route('articles.new') }}">
        <button class="btnNewArticle btn btn-primary" alt="Nuevo artículo">+</button>
    </a>

    <script>
        document.getElementById('body').onkeyup = function(e)
        {
            if (e.keyCode === 13)
            {
                document.getElementById('search_form').submit();
            }
            return true;
        }
    </script>
    
</body>
</html>