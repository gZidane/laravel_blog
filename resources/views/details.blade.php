<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body
        {
            padding-bottom: 50px;
        }
        .imageHeader
        {
            width: 100%;
            height: 500px;
        }
        .article_title
        {
            padding: 0 20px 0 100px;
            box-sizing: border-box;
        }
        .article_author
        {
            padding: 0 20px 0 100px;
            box-sizing: border-box;
        }
        .article_content
        {
            font-size: 18px;
            padding: 20px 100px;
            line-height: 2;
            text-align: justify;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="imageHeader w-100" style="background-image: url('{{ $data['article']['image'] }}'); background-size: cover; background-position: center; background-attachment: fixed;"></div>
    <h1 class="article_title">{{ $data['article']['title'] }}</h1>
    <h5 class="article_author">{{ $data['article']['author']['name'] }}</h5>

    <p class="article_content">{{ $data['article']['content'] }}</p>
</body>
</html>